<?php 

session_start();
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    $sql = "SELECT * FROM admins WHERE username = '$username' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $admin = $result->fetch_assoc();

        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['id'];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Wrong password";
        }
    } else {
        $error = "Admin not found";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

 <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #959590ff;
        justify-content: center;
        align-items: flex-start;
        margin-top: 200px;
    }
    </style>

<body>
    <div class="container align-items-center" style="margin-left: 80px; margin-right:100px">
        <form method="POST" action="login.php" class="text-center">
           <p class="pt-30 fw-bold">Admin Login</p>
            Username: <input type="text" name="username"><br><br>
            password: <input type="password" name="password"><br><br>
           <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

</body>
</html