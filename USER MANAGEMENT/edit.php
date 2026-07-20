<?php
include 'db.php';

// Fetch employee data
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM employee WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
}

// Update employee data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sal = $_POST['sal'];
    $des = $_POST['des'];
    $mail = $_POST['mail'];

    $stmt = $conn->prepare("UPDATE employee SET name=?, age=?, sal=?, des=?, mail=? WHERE id=?");
    $stmt->bind_param("sidssi", $name, $age, $sal, $des, $mail, $id);

    if ($stmt->execute()) {
        header("Location: home.php");
        exit();
    } else {
        echo "Error updating record.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Edit Employee</h3>
                </div>

                <div class="card-body">

                    <form method="POST">

                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text"
                                   class="form-control"
                                   name="name"
                                   value="<?php echo $row['name']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number"
                                   class="form-control"
                                   name="age"
                                   value="<?php echo $row['age']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Salary</label>
                            <input type="number"
                                   step="0.01"
                                   class="form-control"
                                   name="sal"
                                   value="<?php echo $row['sal']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text"
                                   class="form-control"
                                   name="des"
                                   value="<?php echo $row['des']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   class="form-control"
                                   name="mail"
                                   value="<?php echo $row['mail']; ?>"
                                   required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="home.php" class="btn btn-secondary">
                                Back
                            </a>

                            <button type="submit" class="btn btn-success">
                                Update Employee
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>