<?php require "login_session.php"; ?>
<?php include "partial/_database.php"; ?>
<?php include "partial/_navbar.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="koy.css">

</head>

<body>
    

    <!-- this is the first container and image showcase of our website  -->
    <div class="container-fluid box my-3">
        <div class="container text-center ">
            <div class="row">
                <div class="col">
                    <img data-aos="fade-right" data-aos-duration="1000" src="images/main-p.png" class="" height="390px" alt="...">
                </div>
                <div class="col">
                    <h1 data-aos="fade-left" data-aos-duration="1500" class="main-p title my-5">eat our grilled karare kurkure</h1>
                    <h4 data-aos="fade-left" data-aos-duration="1600" class="main-p">crunch your craving, byte by byte</h4>
                    <h6 data-aos="fade-left" data-aos-duration="1700" class="main-p">satisfy your soul with the taste of new too yum</h6>
                    <h6 class="p-prices" data-aos="fade-left" data-aos-duration="1800">$50</h6>
                    <button data-aos="fade-up" data-aos-duration="1500" class="btn btn-success rounded-pill bg-dark btn-add"><i class="fa-solid fa-basket-shopping basket-icon"></i>ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>
    


    <!-- this is the collection container that contain all snack brand images -->

    <div class="container   rounded-left main-collection  " data-aos="fade-up" data-aos-duration="1000">
        <div class="container text-center my-5">
            <div class="row ">
               <?php
$sql = "SELECT * FROM product WHERE sr <=9 ";
$result = mysqli_query($conn,$sql);
$no = 0;

    if (mysqli_num_rows($result) > 0) 
    {
    while ($row = mysqli_fetch_assoc($result))
     {
        if($no <= 3)
        {
            if($no == 0){
        echo " <div class='row align-items-star'></div>";

            }
                 echo "     
             <div data-aos='flip-left' data-aos-duration='1500' class='col  my-5'>
                    <img src=' ".  $row['p-image'] . "' class='p-imgs' height='150px' alt='...'>
                    <h6 class='main-p'>" . $row['p-name'] ."</h6>
                    <h6 class='p-prices'> $".$row['p-prize'] ."</h6>
                    <a class='btn-add' href='product.php?id=" . $row['sr'] . "'><button class='btn btn-success rounded-pill bg-dark'><i class='fa-solid fa-basket-shopping basket-icon'></i>ADD</button></a>
                </div>";
               $no = $no + 1;
        }

          elseif($no >=4 && $no <=7)
     {
            if($no == 4){
        echo " <div class='row align-items-star'></div>";
            }
           echo "   

              <div data-aos='flip-left' data-aos-duration='1500' class='col  my-5'>
                    <img src=' ".  $row['p-image'] . "' class='p-imgs' height='150px' alt='...'>
                    <h6 class='main-p'>" . $row['p-name'] ."</h6>
                    <h6 class='p-prices'>$".$row['p-prize'] ."</h6>
                    <a class='btn-add' href='product.php?id=" . $row['sr'] . "'><button class='btn btn-success rounded-pill bg-dark'><i class='fa-solid fa-basket-shopping basket-icon'></i>ADD</button></a>
               </div>";
               $no = $no + 1;     
     }

     else{
         $no = 0;
    
         
    }
            
    }
}
 ?>
                

      </div>
    </div>
  </div>

   

<!-- customer says -->
 <div class="container text-center my-5 "  >
        <div class="row cus1" data-aos="fade-up"  data-aos-duration='1500'>
    <div class="col-5"><a href="#"> <img src="images/customer.png" class="d-block w-100 " height="255em" alt="..."></a></div>
    <div class="col-6 text-cus"><h2>What Customer Says</h2>
        <h6>“TastyByte made snack shopping feel effortless! The website is beautifully designed, smooth to navigate, and packed with delicious options. Every detail feels thoughtfully crafted, from the visuals to the checkout process. I’ll be coming back for more!”</h6>
    </div>
 </div>

  <!-- this is slider  -->
<div class="container my-5">
       <div id="slider" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <a href="#"><img src="images/banner1.jpg" class="d-block w-100" height="255em" alt="..."></a> 
    </div>
    <div class="carousel-item">
      <a href="#"> <img src="images/banner2.jpg" class="d-block w-100" height="255em" alt="..."></a>
    </div>
    <div class="carousel-item">
       <a href="#"><img src="images/banner3.webp" class="d-block w-100" height="255em" alt="..."></a>
    </div>
  </div>
  <button class="carousel-control-prev " type="button" data-bs-target="#slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon b-b" aria-hidden="true"></span>
    <span class="visually-hidden ">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
    <span class="carousel-control-next-icon b-b" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
<!-- another container for best chips  -->

<div class="container bag" >
  <div class="row">
    <div class="col-5"><a href="#"> <img data-aos="fade-right" data-aos-duration="1000" src="images/main-p.png" class="d-block w-100" height="250em" alt="..."></a></div>
    <div class="col-6" data-aos="fade-left" data-aos-duration="1000"><h2>With flavors almost as rich as our history</h2>
        <h6>"At TastyByte, we craft seamless digital experiences infused with the joy of snacking. Our platforms aren't just functional—they're engaging, flavorful, and built to delight users with intuitive design and reliability. Whether it’s a mouthwatering visual journey or a smooth e-commerce experience, we blend creativity and technical expertise to make every interaction a treat!"</h6>
        <h6>$50</h6>
        <button class="btn btn-danger">Buy Now</button>
    </div>


  </div>
</div>

 <div class="container-fluid my-5" id="video" >
    
  <div class="container text-center">
  <div class="row">
    <div class="col">
        <video autoplay muted loop id="myVideo" height="250em">
  <source src="images/background.mp4" type="video/mp4"> 
    </div>
    <div class="col">
        <h2 class="text-cus">Explore Here</h2>
        <h4>🛒 Grab your TastyByte today! Browse. Click. Enjoy. Because every snack is a moment worth savoring. 🔥</h4>
        <button class="btn btn-danger">Explore</button>
    </div>
  </div>
</div>
</video>

</div>
</body>
</html>

<?php include "partial/_footer.php"; ?> 