<?php
include 'db.php';

// Fetch project data
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM projects WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
}

// Update project data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $project_name = $_POST['project_name'];
    $project_description = $_POST['project_description'];
    $status = $_POST['status'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $stmt = $conn->prepare("UPDATE projects SET project_name=?, project_description=?, status=?, start_date=?, end_date=? WHERE id=?");
    $stmt->bind_param("sssssi", $project_name, $project_description, $status, $start_date, $end_date, $id);

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
    <title>Edit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Edit Project</h3>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Project Name</label>
                            <input type="text" class="form-control" name="project_name" value="<?php echo $row['project_name']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="project_description" value="<?php echo $row['project_description']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <input type="text" class="form-control" name="status" value="<?php echo $row['status']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Start Date</label>
                            <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']; ?>" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="home.php" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-success">Update Project</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>