<?php
require_once '../config/db.php';
require_once '../includes/auth_check.php';
?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<link rel="stylesheet" href="../assets/styles/style.css">

<div class="container mt-2">
    <h3 class="mb-4">Add New Book</h3>

    <form action="add_action.php" method="POST" class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Book Title</label>
            <input type="text" name="book_title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Author Name</label>
            <input type="text" name="author_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Total Copies</label>
            <input type="number" name="total_copies" class="form-control" min="0" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Available Copies</label>
            <input type="number" name="available_copies" class="form-control" min="0" required>
        </div>

        <button type="submit" class="btn btn-primary auth-btn">Add Book</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
