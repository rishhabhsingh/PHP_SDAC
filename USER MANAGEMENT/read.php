<?php
include 'db.php';

echo "<div style='text-align:center;'>";

echo "<h1>Employee Management System</h1>";

echo '
<!DOCTYPE html>
<html lang="en">
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Add Employee</h3>
                </div>

                <div class="card-body">

                    <form method="POST" action="home.php">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" placeholder="Enter Age" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Salary</label>
                            <input type="number" step="0.01" name="sal" class="form-control" placeholder="Enter Salary" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" name="des" class="form-control" placeholder="Enter Designation" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="mail" class="form-control" placeholder="Enter Email" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="reset" class="btn btn-secondary">
                                Reset
                            </button>

                            <button type="submit" class="btn btn-success">
                                Add Employee
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>';


echo '
<!DOCTYPE html>
<html lang="en">
<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Employee Details</h3>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped align-middle text-center">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Salary</th>
                            <th>Designation</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>';
        while ($row = $result->fetch_assoc()) {
    echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>₹{$row['sal']}</td>
            <td>{$row['des']}</td>
            <td>{$row['mail']}</td>
            <td>
                <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>
                    Edit
                </a>
            </td>
            <td>
                <a href='delete.php?id={$row['id']}'
                   class='btn btn-danger btn-sm'
                   onclick=\"return confirm('Are you sure you want to delete this employee?');\">
                    Delete
                </a>
            </td>
        </tr>";
}

echo '
                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>

</body>
</html>';
?>