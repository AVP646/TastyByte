 <?php include "navbar.php"; ?>
<?php require "partial/_database.php"; ?>
<?php include "adminLogin_session.php"; ?>
 <?php

    $user = "SELECT * FROM USERS";
    $query = mysqli_query($conn,$user);

    $users = mysqli_num_rows($query);

?>
<?php

    $order = "SELECT * FROM address";
    $query = mysqli_query($conn,$order);

    $orders = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DASHBOARD</title>
  <style>
    body{
        background: #D4DE95;
    }
    .main-content {
            padding: 20px;
            text-align:center;
        }
        .topbar {
            width: 100%;
            padding: 15px;
            background: #007bff;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
  </style>
</head>
<body>
  <div class="main-content">
        <div class="topbar">Welcome to Admin Dashboard</div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-primary text-white p-3">
                        <h4>Total Users</h4>
                        <p><?php echo $users; ?> Active Users</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-success text-white p-3">
                        <h4>Orders Processed</h4>
                        <p><?php echo $orders; ?> Successful Orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>




<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .topbar {
            width: 100%;
            padding: 15px;
            background: #007bff;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
    </style>
</head>
<body>

     Sidebar 
    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="#">Dashboard</a>
        <a href="#">Users</a>
        <a href="#">Orders</a>
        <a href="#">Products</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>

    <!- Main Content -
    <div class="main-content">
        <div class="topbar">Welcome to Admin Dashboard</div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-primary text-white p-3">
                        <h4>Total Users</h4>
                        <p>1,250 Active Users</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-success text-white p-3">
                        <h4>Orders Processed</h4>
                        <p>3,400 Successful Orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <- Bootstrap JS -
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html> -->
