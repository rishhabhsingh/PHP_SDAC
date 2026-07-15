<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sal = $_POST['salary'];
    $email = $_POST['mail'];
    $password = password_hash($_POST['pw'], PASSWORD_BCRYPT);

    $sql = $conn -> prepare ('INSERT INTO EMP VALUES (?,?,?,?,?)');
    $sql -> bind_param('isdss', $id, $name, $sal, $email, $password);
    
    if($sql -> execute()){
        header("Location: login.php");
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
        <main>
        <div class="container mt-4 COL-MD-6 border rounded sh">

    <h2 class="text-center mt-2">Student Registration Form</h2>

    <form action="" method="POST">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>ID</label>
            <input type="text" name="id" class="form-control">
        </div>

        <div class="mb-3">
            <label>Salary</label>
            <input type="text" name="salary" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="mail" class="form-control">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="pw" class="form-control">
        </div>

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
