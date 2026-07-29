<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['name'];
    $username  = $_POST['username'];
    $email     = $_POST['mail'];
    $phone     = $_POST['phone'];
    $password  = $_POST['password'];

    if ($full_name === '' || $username === '' || $email === '' || $phone === '' || $password === '') {
        header("Location: register.php?error=All fields are required");
        exit;
    }

    $check = $conn->prepare("SELECT id FROM users WHERE user_name = ? OR email = ?");
    $check->bind_param("ss", $username, $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        header("Location: register.php?error=Username or email already registered");
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (full_name, user_name, email, phone, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $full_name, $username, $email, $phone, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: login.php?registered=1");
        exit;
    } else {
        header("Location: register.php?error=Something went wrong, try again");
        exit;
    }
}
