<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /LibraryManagementSystem/auth/login.php");
    exit;
}
