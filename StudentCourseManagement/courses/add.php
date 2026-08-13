<?php
include '../config/db.php';
include '../includes/auth_check.php';
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<div class="container mt-4">
    <h3 class="mb-4">Add New Course</h3>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div>
    <?php endif; ?>

    <form action="add_action.php" method="POST" class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Course Name</label>
            <input type="text" name="course_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" placeholder="e.g. 6 Months" required>
        </div>

        <button type="submit" class="btn btn-primary auth-btn">Add Course</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>