<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top px-3">
    <a class="navbar-brand" href="/LibraryManagementSystem/main.php">Library Management System</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
        <span class="navbar-text text-white me-auto ms-3">
        </span>

        <ul class="navbar-nav align-items-lg-center">
            <li class="nav-item">
                <a class="nav-link" href="/LibraryManagementSystem/main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/LibraryManagementSystem/books/add.php">Add Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/LibraryManagementSystem/books/view.php">View Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/LibraryManagementSystem/export/export_pdf.php">Generate PDF</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="/LibraryManagementSystem/auth/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Spacer so fixed navbar doesn't overlap page content -->
<div style="height: 70px;"></div>
