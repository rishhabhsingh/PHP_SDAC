<?php
session_start();
include 'db.php';

echo "<h1>Hello, {$_SESSION['username']}</h1>";
echo "<a href='project_logout.php'>Click to Logout</a>";
?>