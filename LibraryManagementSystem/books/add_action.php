<?php
require_once '../config/db.php';
require_once '../includes/auth_check.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $book_title       = $_POST['book_title'];
    $author_name      = $_POST['author_name'];
    $genre            = $_POST['genre'];
    $total_copies     = $_POST['total_copies'];
    $available_copies = $_POST['available_copies'];
    $user_id          = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO books (book_title, author_name, genre, total_copies, available_copies, user_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiii", $book_title, $author_name, $genre, $total_copies, $available_copies, $user_id);

    if ($stmt->execute()) {
        header("Location: view.php");
        exit;
    }
}
?>
