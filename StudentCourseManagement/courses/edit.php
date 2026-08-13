<?php
require_once '../config/db.php';
require_once '../includes/auth_check.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: view.php");
    exit;
}

$stmt = $conn->prepare("SELECT * FROM courses WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$course = $result->fetch_assoc();

if (!$course) {
    header("Location: view.php");
    exit;
}
?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<div class="container mt-4">
    <h3 class="mb-4">Edit Course</h3>

    <form action="edit_action.php" method="POST" class="col-md-6">
        <input type="hidden" name="id" value="<?= $course['id'] ?>">

        <div class="mb-3">
            <label class="form-label">Course Name</label>
            <input type="text" name="course_name" class="form-control" value="<?= htmlspecialchars($course['course_name']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required><?= htmlspecialchars($course['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" value="<?= htmlspecialchars($course['duration']) ?>" required>
        </div>

        <button type="submit" class="btn btn-primary auth-btn">Update Course</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>