<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $username = $_POST['username'];
    $password = password_hash($_POST['pw'], PASSWORD_BCRYPT);

    $sql = $conn -> prepare ('INSERT INTO project_managers (name, email, username, password) VALUES (?,?,?,?)');
    $sql -> bind_param('ssss', $name, $email, $username, $password);
    
    if($sql -> execute()){
        header("Location: project_login.php");
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Project Manager Registration</title>
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
        <div class="container mt-4 COL-MD-6 border rounded sh">

    <h2 class="text-center mt-2">Project Manager Registration Form</h2>

    <form action="" method="POST">

        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="mail" class="form-control">
        </div>

        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="pw" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>
        </main>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>