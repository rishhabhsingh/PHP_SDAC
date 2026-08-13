<?php
require_once '../config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Student Course Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="d-flex align-items-center justify-content-center auth-wrapper">
    <div class="auth-card">
        <h3 class="text-center mb-4">Login</h3>

        <form action="login_action.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 auth-btn">Login</button>
        </form>

        <p class="text-center mt-3 mb-0">
            Don't have an account? <a href="register.php">Register here</a>
        </p>
    </div>
</div>

</body>
</html>