<?php
require_once '../config/db.php';
require_once '../includes/auth_check.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: view.php");
    exit;
}

$stmt = $conn->prepare("SELECT * FROM books WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$book = $result->fetch_assoc();

if (!$book) {
    header("Location: view.php");
    exit;
}
?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<div class="container mt-2">
    <h3 class="mb-4">Edit Book</h3>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div>
    <?php endif; ?>

    <form action="edit_action.php" method="POST" class="col-md-6">
        <input type="hidden" name="id" value="<?= $book['id'] ?>">

        <div class="mb-3">
            <label class="form-label">Book Title</label>
            <input type="text" name="book_title" class="form-control" value="<?= htmlspecialchars($book['book_title']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Author Name</label>
            <input type="text" name="author_name" class="form-control" value="<?= htmlspecialchars($book['author_name']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" value="<?= htmlspecialchars($book['genre']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Total Copies</label>
            <input type="number" name="total_copies" class="form-control" min="0" value="<?= (int)$book['total_copies'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Available Copies</label>
            <input type="number" name="available_copies" class="form-control" min="0" value="<?= (int)$book['available_copies'] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary auth-btn">Update Book</button>
    </form>
</div>

<link rel="stylesheet" href="../assets/styles/style.css">

<?php include '../includes/footer.php'; ?>
