<?php
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $name, $pass);
        $stmt->fetch();

        if (password_verify($password, $pass)) {
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;
            header("Location: ../main.php");
            exit;
        } else {
            header("Location: login.php?error=Invalid credentials");
            exit;
        }
    }
}
?>