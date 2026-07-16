<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['mail'];
    $pass = password_hash($_POST['pw'], PASSWORD_BCRYPT);

    $sql = $conn -> prepare('INSERT INTO USERS VALUES (?,?,?,?)');
    $sql -> bind_param('siss', $name, $age, $email, $pass);

    if($sql -> execute()){
        header("Location: login.php");
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Register</title>
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
        <main>
            <div
                class="container mt-4 COL-MD-4 border rounded shadow">
                
                <h1 class="text-center mt-2">Register Kijiye!</h1>

                <form method="POST" class="text-center mb-3">
                    <br>
                    Name:
                    <input type="text" name="name">
                    <br>

                    <br>
                    Age:
                    <input type="number" name="age">
                    <br>

                    <br>
                    Email:
                    <input type="email" name="mail">
                    <br>

                    <br>
                    Password:
                    <input type="password" name="pw">
                    <br>

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
        </main>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
