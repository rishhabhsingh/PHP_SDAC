<?php
require_once '../config/db.php';
require_once '../includes/auth_check.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id                = $_POST['id'];
    $book_title        = trim($_POST['book_title']);
    $author_name       = trim($_POST['author_name']);
    $genre             = trim($_POST['genre']);
    $total_copies      = trim($_POST['total_copies']);
    $available_copies  = trim($_POST['available_copies']);

    // Server-side validation before saving
    if ($book_title === '' || $author_name === '' || $genre === '' || $total_copies === '' || $available_copies === '') {
        header("Location: edit.php?id=$id&error=All fields are required");
        exit;
    }

    if (!is_numeric($total_copies) || !is_numeric($available_copies)) {
        header("Location: edit.php?id=$id&error=Copies must be numeric");
        exit;
    }

    $stmt = $conn->prepare("UPDATE books SET book_title = ?, author_name = ?, genre = ?, total_copies = ?, available_copies = ? WHERE id = ?");
    $stmt->bind_param("sssiii", $book_title, $author_name, $genre, $total_copies, $available_copies, $id);
    $stmt->execute();

    header("Location: view.php");
    exit;
}
