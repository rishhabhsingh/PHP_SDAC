<?php
session_start();

echo "<h2>Task Session Check</h2>";

if (isset($_SESSION['task_id'])) {
    echo "Task ID retrieved from session: " . $_SESSION['task_id'];
} else {
    echo "No task_id set in session.";
}
?>
