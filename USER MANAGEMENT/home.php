<?php
session_start();
include 'db.php';

$result = $conn->query("SELECT * FROM employee");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $sal = $_POST['sal'];
    $des = $_POST['des'];
    $mail = $_POST['mail'];

    $stmt = $conn->prepare("INSERT INTO employee (name, age, sal, des, mail) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sidss", $name, $age, $sal, $des, $mail);

    if ($stmt->execute()) {
        header("Location: home.php");
        exit();
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <title>User Management</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-danger"
            >
                <div class="container">
                    <a class="navbar-brand text-white" href="home.php">Hello, <?php echo $_SESSION['name']; ?> </a>

                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <form class="d-flex my-2 my-lg-0 ms-auto" action="logout.php">
                            <button
                                class="btn btn-outline-success my-2 my-sm-0 bg-light text-dark"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
            <div
                class="container mt-4"
            >
                <?php include "read.php"; ?>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
