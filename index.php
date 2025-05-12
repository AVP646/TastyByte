<?php

session_start();

if($_SESSION['login'] != true){
    header("location:login.php");
    exit;
}
else{
    // alert();
}

?>


<?php
include "partial/_navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!-- this is the first container and image showcase of our website  -->
    <div class="container-fluid box my-3">
        <div class="container text-center ">
            <div class="row">
                <div class="col">
                    <img src="images/main-p.png" class="" height="390px" alt="...">
                </div>
                <div class="col">
                    <h1 class="main-p title my-5">eat our grilled karare kurkure</h1>
                    <h4 class="main-p">crunch your craving, byte by byte</h4>
                    <h6 class="main-p">satisfy your soul with the taste of new too yum</h6>
                    <button class="btn btn-success rounded-pill bg-dark"><i
                            class="fa-solid fa-basket-shopping basket-icon"></i>ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>


    <!-- this is the collection container that contain all snack brand images -->

    <div class="container main-collection  rounded-left">
        <div class="container text-center my-5">
            <div class="row ">

                <div class="col  my-5">
                    <img src="images/snack1.webp" class="" height="150px" alt="...">
                    <h6 class="main-p">crunch your craving</h6>
                    <button class="btn btn-success rounded-pill bg-dark"><i class="fa-solid fa-basket-shopping basket-icon"></i>ADD</button>
                </div>

                <div class="col my-5">
                    <img src="images/snack6.png" class="" height="150px" alt="...">
                    <h6 class="main-p">crunch your craving</h6>
                    <button class="btn btn-success rounded-pill bg-dark"><i
                            class="fa-solid fa-basket-shopping basket-icon"></i>ADD</button>
                </div>


                <div class="col my-5">
                    <img src="images/snack3.webp" class="" height="150px" alt="...">
                    <h6 class="main-p">crunch your craving</h6>
                    <button class="btn btn-success rounded-pill bg-dark"><i
                            class="fa-solid fa-basket-shopping basket-icon"></i>ADD</button>

                </div>
                <div class="col my-5">
                    <img src="images/snack4.webp" class="" height="150px" alt="...">
                    <h6 class="main-p">crunch your craving</h6>
                    <button class="btn btn-success rounded-pill bg-dark"><i
                            class="fa-solid fa-basket-shopping basket-icon"></i>ADD</button>

                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">

                <div class="col my-1">
                    <img src="images/main-p.png" class="" height="150px" alt="...">
                    <h6 class="main-p">crunch your craving</h6>
                    <button class="btn btn-success rounded-pill bg-dark"><i
                            class="fa-solid fa-basket-shopping basket-icon"></i>ADD</button>
                </div>

                <div class="col my-1">
                    <img src="images/main-p.png" class="" height="150px" alt="...">
                    <h6 class="main-p">crunch your craving</h6>
                    <button class="btn btn-success rounded-pill bg-dark"><i
                            class="fa-solid fa-basket-shopping basket-icon"></i>ADD</button>

                </div>
                <div class="col my-1">
                    <img src="images/main-p.png" class="" height="150px" alt="...">
                    <h6 class="main-p">crunch your craving</h6>
                    <button class="btn btn-success rounded-pill bg-dark"><i
                            class="fa-solid fa-basket-shopping basket-icon"></i>ADD</button>

                </div>
                 <div class="col my-1">
                    <img src="images/main-p.png" class="" height="150px" alt="...">
                    <h6 class="main-p">crunch your craving</h6>
                    <button class="btn btn-success rounded-pill bg-dark"><i
                            class="fa-solid fa-basket-shopping basket-icon"></i>ADD</button>

                </div>
            </div>
        </div>
    </div>


     <?php include "partial/_footer.php"; ?> 
</body>
</html>
