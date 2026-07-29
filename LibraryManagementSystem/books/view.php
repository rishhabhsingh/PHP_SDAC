<?php
require_once '../config/db.php';
require_once '../includes/auth_check.php';

$result = $conn->query("SELECT * FROM books ORDER BY id DESC");
?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<link rel="stylesheet" href="../assets/styles/style.css">

<div class="container mt-2">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
        <h3 class="mb-0">Book Dashboard</h3>
        <div>
            <a href="add.php" class="btn btn-primary auth-btn">+ Add Book</a>
            <a href="../export/export_pdf.php" class="btn btn-success">Generate PDF</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table gradient-table">
            <thead>
                <tr>
                    <th>Book ID</th>
                    <th>Book Title</th>
                    <th>Author Name</th>
                    <th>Genre</th>
                    <th>Available Copies</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['book_title']) ?></td>
                            <td><?= htmlspecialchars($row['author_name']) ?></td>
                            <td><span class="badge bg-secondary"><?= htmlspecialchars($row['genre']) ?></span></td>
                            <td><?= (int)$row['available_copies'] ?> / <?= (int)$row['total_copies'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?id=<?= $row['id'] ?>"
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Delete this book?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="6" class="text-center">No books added yet.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
