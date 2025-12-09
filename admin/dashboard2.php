<?php session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">
    <div class="row">

        
        <div class="col-md-2 bg-success text-white min-vh-100 p-0">
            <div class="text-center py-3 border-bottom border-secondary">
                <h5>Admin Panel</h5>
            </div>
            <hr class="border-bottom border-3 border-dark">

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white px-3 py-2" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="../form.php" class="nav-link text-white px-3 py-2" href="posts.php">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3 py-2" href="categories.php">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3 py-2" href="#">Countries</a>
                </li>
                 <hr class="border-bottom border-3 border-dark">
                <li class="nav-item border-top border-secondary">
                    <a class="nav-link text-white px-3 py-2" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>

        
        <div class="col-md-10 p-0">
           
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-4">
                <span class="navbar-brand">Welcome, Admin</span>

                <div class="ms-auto">
                    <a href="logout.php" class="btn btn-primary btn-sm">Logout</a>
                </div>
            </nav>

            <div class="container mt-4">

                <h3 class="mb-3">Dashboard Overview</h3>

                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5>Total Posts</h5>
                                <p class="text-muted"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5>Total Categories</h5>
                                <p class="text-muted"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5>Total Countries</h5>
                                <p class="text-muted"></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

</body>
</html>
