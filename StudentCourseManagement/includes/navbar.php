<nav class="navbar navbar-expand-lg navbar-dark custom-navbar px-3">
    <a class="navbar-brand" href="main.php">Student Course System</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="courses/add.php">Add Course</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="courses/view.php">View Courses</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle color: #fff;" href="" data-bs-toggle="dropdown">
                    Export Data
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Export to Excel</a></li>
                    <li><a class="dropdown-item" href="">Export to PDF</a></li>
                </ul>
            </li>
            <li class="nav-item color: #fff;">
                <a class="nav-link text-danger" href="auth/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>