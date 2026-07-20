<?php
session_start();
include "db.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
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
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href="#">Hello, <?php echo $_SESSION['name']; ?></a>

                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <form class="d-flex my-2 my-lg-0 ms-auto" action="logout.php">
                            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="create.php" aria-current="page"
                                        >Add Product
                                        <span class="visually-hidden">(current)</span></a
                                    >
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" href="delete.php" aria-current="page"
                                        >Delete Product
                                        <span class="visually-hidden">(current)</span></a
                                    >
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" href="update.php" aria-current="page"
                                        >Update Product
                                        <span class="visually-hidden">(current)</span></a
                                    >
                                </li>

                            </ul>
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main class="container mt-4">
            <div class="d-flex justify-content-center">
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
