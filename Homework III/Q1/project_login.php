<?php 
session_start();
include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['pw'];

    $sql = $conn -> prepare ('SELECT PASSWORD FROM project_managers WHERE USERNAME = ?');
    $sql -> bind_param('s', $username);
    $sql->execute();
    $sql -> bind_result($pass);
    $sql -> fetch();

    if(password_verify($password, $pass)){
        $_SESSION['username'] = $username;
        header("Location: project_dashboard.php");
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Project Manager Login</title>
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

                <h2 class="text-center mt-4">Project Manager Login</h2>

                <form action="" method="POST">

                    <div class="mb-3">
                        <label>Project Manager Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="pw" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

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