<?php
include 'db.php';

echo "<div style='text-align:center;'>";
echo "<h1>Project Management System</h1>";

echo '
<div class="card shadow mb-4">
    <div class="card-header bg-success text-white">
        <h3 class="mb-0">Add Project</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="home.php">
            <div class="mb-3">
                <label class="form-label">Project Name</label>
                <input type="text" name="project_name" class="form-control" placeholder="Enter Project Name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="project_description" class="form-control" placeholder="Enter Description" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="pending">pending</option>
                    <option value="in-progress">in-progress</option>
                    <option value="completed">completed</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Start Date</label>
                <input type="date" name="start_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">End Date</label>
                <input type="date" name="end_date" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-success">Add Project</button>
            </div>
        </form>
    </div>
</div>';

echo '
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Project Details</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>';

while ($row = $result->fetch_assoc()) {
    echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['project_name']}</td>
            <td>{$row['project_description']}</td>
            <td>{$row['status']}</td>
            <td>{$row['start_date']}</td>
            <td>{$row['end_date']}</td>
            <td>
                <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
            </td>
            <td>
                <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this project?');\">Delete</a>
            </td>
        </tr>";
}

echo '
                </tbody>
            </table>
        </div>
    </div>
</div>';
echo "</div>";
?>