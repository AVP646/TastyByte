<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TastyByte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> 
    <style>
      .BG-COLOR{
        background-color:#BAC095;
      }
    .navbar-nav  li
    {
    margin-left:30px;
    margin-right:30px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 600;
    }

    nav a
    {
    color:black;
    }
    #form_nav a{
        margin-top:6px;
    }
    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg BG-COLOR ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> TastyByte </a>
    <a href="admin_user.php"><i class="fa-solid fa-user"></i></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">DASHBOARD</a>
        </li>
        
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Product_manage.php">MANAGE PRODUCT</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Order_manage.php">ORDERS</a>
        </li>
         </li>
          <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="user_manage.php">MANAGE USERS</a></li>
     
     
      </ul>   
    </div>
  </div>
</nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>