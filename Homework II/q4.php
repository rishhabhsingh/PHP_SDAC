<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pw = $_POST['pw'];
    $cpw = $_POST['cpw'];
    $des = $_POST['des'];

    if(empty($name) || empty($mail) || empty($pw) || empty($cpw) || empty($des)){
        echo "All fields are required.";
    }
    elseif($pw !== $cpw){
        echo "Passwords do not match.";
    }
    elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email format.";
    }
    else{
        $check = $conn->prepare('SELECT id FROM employee_registration WHERE mail = ?');
        $check->bind_param('s', $mail);
        $check->execute();
        $check->store_result();

        if($check->num_rows > 0){
            echo "Email already exists.";
        }
        else{
            $hashed_pw = password_hash($pw, PASSWORD_BCRYPT);

            $sql = $conn->prepare('INSERT INTO employee_registration (name, mail, pw, des) VALUES (?,?,?,?)');
            $sql->bind_param('ssss', $name, $mail, $hashed_pw, $des);

            if($sql->execute()){
                echo "Registration successful!";
            } else {
                echo "Error: " . $sql->error;
            }
        }
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Register</title>
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
            <div class="container mt-4 col-md-4 border rounded shadow">
                <h1 class="text-center mt-2">Register Employee</h1>
                <form method="POST" class="text-center mb-3">
                    <br>
                    Full Name:
                    <input type="text" name="name">
                    <br>

                    <br>
                    Email:
                    <input type="text" name="mail">
                    <br>

                    <br>
                    Password:
                    <input type="password" name="pw">
                    <br>

                    <br>
                    Confirm Password:
                    <input type="password" name="cpw">
                    <br>

                    <br>
                    Job Title:
                    <input type="text" name="des">
                    <br>

                    <br>
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