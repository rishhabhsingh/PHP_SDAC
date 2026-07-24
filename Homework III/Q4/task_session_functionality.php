<?php
session_start();

$_SESSION['task_id'] = 101;

echo "<h2>Task Session Demo</h2>";
echo "Current Task ID being worked on: " . $_SESSION['task_id'] . "<br>";
echo "<a href='task_session_check.php'>Go to another page to check task_id</a>";
?>