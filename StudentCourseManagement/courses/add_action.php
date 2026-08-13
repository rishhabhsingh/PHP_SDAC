<?php
require_once '../config/db.php';
require_once '../includes/auth_check.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $course_name = trim($_POST['course_name']);
    $description = trim($_POST['description']);
    $duration = trim($_POST['duration']);
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO courses (course_name, description, duration, user_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $course_name, $description, $duration, $user_id);

    if ($stmt->execute()) {
        header("Location: view.php");
        exit;
    } else {
        header("Location: add.php?error=Something went wrong");
        exit;
    }
}