<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TastyByte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> 
    <style>

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
    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="images/logo.png" class="img-responsive" alt="Cinque Terre" width="84" height="46"> </a>
    <a href="partial/_user.php"><i class="fa-solid fa-user"></i></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ABOUT</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">CHIPS</a>
        </li>
         </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">SERVICES</a>
        </li>
     
     
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 rounded-pill  " type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn"  type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
         <button class="btn"  type="submit"><i class="fa-solid fa-basket-shopping"></i></button>
      </form>
    </div>
  </div>
</nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>