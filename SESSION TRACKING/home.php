<?php
session_start();
include 'db.php';

echo "<h1>Hello, {$_SESSION['name']}</h1>";
echo "<a href='logout.php'>Click to Logout</a>";
?>