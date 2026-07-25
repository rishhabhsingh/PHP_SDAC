<nav class="navbar navbar-expand-lg navbar-dark custom-navbar px-3">
    <a class="navbar-brand" href="main.php">Restaurant Admin</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item color: #fff;">
                <a class="nav-link" href="main.php">Home</a>
            </li>
            <li class="nav-item color: #fff;">
                <a class="nav-link" href="menu/add.php">Add Menu Item</a>
            </li>
            <li class="nav-item color: #fff;">
                <a class="nav-link" href="menu/view.php">View Menu</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle color: #fff;" href="#" data-bs-toggle="dropdown">
                    Export Data
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="export/export_excel.php">Export to Excel</a></li>
                    <li><a class="dropdown-item" href="export/export_pdf.php">Export to PDF</a></li>
                </ul>
            </li>
            <style>
                .nav-item.dropdown:hover .dropdown-menu {
                    display: block;
                    margin-top: 0;
                }
            </style>
            <li class="nav-item color: #fff;">
                <a class="nav-link text-danger" href="auth/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>