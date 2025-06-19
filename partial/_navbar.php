<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TastyByte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> 
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
    .nav-links:hover{

    background:#D4DE95;
    border-radius:10px;

    }
    
    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg BG-COLOR ">
  <div class="container-fluid">
    <a class="navbar-brand"  data-aos="fade-down" data-aos-duration="1000" href="#"> TastyByte </a>
    <a href="_user.php"><i  data-aos="fade-down" data-aos-duration="1100" class="fa-solid fa-user"></i></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a data-aos="fade-down" data-aos-duration="1200" class="nav-link active  nav-links" aria-current="page" href="index.php">HOME</a>
        </li>
        
         <li class="nav-item">
          <a data-aos="fade-down" data-aos-duration="1300" class="nav-link active nav-links" aria-current="page" href="about_us.php">ABOUT</a>
        </li>
          <li class="nav-item">
          <a data-aos="fade-down" data-aos-duration="1400" class="nav-link active nav-links" aria-current="page" href="product.php">PRODUCT</a>
        </li>
         </li>
          <li class="nav-item">
          <a data-aos="fade-down" data-aos-duration="1500" class="nav-link active nav-links" aria-current="page" href="contactUs.php">CONTACT US</a>
        </li>
     
     
      </ul>
      
      <form class="d-flex" role="search" id="form_nav">
        <input data-aos="fade-down" data-aos-duration="1600" class="form-control me-2 rounded-pill  " type="search" placeholder="Search" aria-label="Search"/>
        <button data-aos="fade-down" data-aos-duration="1700" class="btn"  type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        <a  href="addCart.php"><i data-aos="fade-down" data-aos-duration="1800" class="fa-solid fa-basket-shopping nav-links"></i></a> 
      </form>
       
    </div>
  </div>
</nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>