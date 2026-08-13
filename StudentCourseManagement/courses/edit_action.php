<?php
require_once '../config/db.php';
require_once '../includes/auth_check.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $course_name = trim($_POST['course_name']);
    $description = trim($_POST['description']);
    $duration = trim($_POST['duration']);

    $stmt = $conn->prepare("UPDATE courses SET course_name = ?, description = ?, duration = ? WHERE id = ?");
    $stmt->bind_param("sssi", $course_name, $description, $duration, $id);
    $stmt->execute();

    header("Location: view.php");
    exit;
}