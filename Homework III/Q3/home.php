<?php
session_start();
include 'db.php';

$result = $conn->query("SELECT * FROM projects");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $project_name = $_POST['project_name'];
    $project_description = $_POST['project_description'];
    $status = $_POST['status'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $stmt = $conn->prepare("INSERT INTO projects (project_name, project_description, status, start_date, end_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $project_name, $project_description, $status, $start_date, $end_date);

    if ($stmt->execute()) {
        header("Location: home.php");
        exit();
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <title>Project Management</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <main>
            <div class="container mt-4">
                <?php include "read.php"; ?>
            </div>
        </main>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>