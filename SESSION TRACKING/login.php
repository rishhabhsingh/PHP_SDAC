<?php 
session_start();
include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $password = $_POST['pw'];

    $sql = $conn -> prepare ('SELECT PASSWORD FROM EMP WHERE NAME = ?');
    $sql -> bind_param('s', $name);
    $sql->execute();
    $sql -> bind_result($pass);
    $sql -> fetch();

    if(password_verify($password, $pass)){
        $_SESSION['name'] = $name;
        header("Location: home.php");
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container mt-4 COL-MD-6 border rounded sh">

                <h2 class="text-center mt-4">Student Login</h2>

                <form action="" method="POST">

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="name" name="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="pw" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                </form>

            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
