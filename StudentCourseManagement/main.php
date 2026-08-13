<?php
include 'includes/auth_check.php';
include 'config/db.php';             
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <title>Student Course Management System</title>
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
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>

    <body>
        <main>
            <div class="container mt-4">

    <!-- Bootstrap Carousel -->
    <div class="container mt-4">

    <!-- Bootstrap Carousel -->
    <div id="courseCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#courseCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#courseCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#courseCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/uploads/slide1.jpg" class="d-block w-100" alt="Course 1">
            </div>

            <div class="carousel-item">
                <img src="assets/uploads/slide2.jpg" class="d-block w-100" alt="Course 2">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/uploads/slide3.jpg" class="d-block w-100" alt="Course 3">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#courseCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#courseCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Welcome text -->
    <div class="text-center">
        <h2>Welcome, <?php echo ($_SESSION['user_name']); ?></h2>
        <p>Manage your courses using the navbar above.</p>
    </div>

</div>
</div>
        </main>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


<?php include 'includes/footer.php'; ?>