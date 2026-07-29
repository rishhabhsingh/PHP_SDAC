<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, user_name, password FROM users WHERE user_name = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $uname, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION['user_id']  = $id;
            $_SESSION['username'] = $uname;
            header("Location: ../main.php");
            exit;
        } else {
            header("Location: login.php?error=Invalid username or password");
            exit;
        }
    } else {
        header("Location: login.php?error=Invalid username or password");
        exit;
    }
}
