<?php include "partial/_navbar.php"; ?>
<?php require "partial/_database.php"; ?>
<?php require "login_session.php"; ?>
<!-- <?php session_start(); ?> -->

<?php

$id = $_GET['id'];
$query = " SELECT * FROM product where sr='". $id ."'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);

    $image = $row['p-image'];
    $name = $row['p-name'];
    $prize = $row['p-prize'];
    $user1 = $_SESSION['user'];

    $query2 = "INSERT INTO cart (`image`, `name`, `prize`, `user`) VALUES ('$image', '$name', '$prize', '$user1')";
    $result2 = mysqli_query($conn,$query2);

   
}


?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
    <style>
        .main-collection {
            background: #BAC095;
            border-radius: 20px;
        }

        .slogan {
            margin-top: 20px;
            justify-content: center;
            background: #BAC095;
        }

        .slogan h1 {
            color: white;
            letter-spacing: 1px;
            font-size: 60px;
            text-transform: capitalize;
            font-family: arial;
            font-weight: 600;
            padding-top: 50px;
        }

        .slogan h6 {
            color: white;
            text-transform: capitalize;
            font-family: arial;
            font-weight: 200;
        }

        #last-s {
            padding-bottom: 50px;
        }
        .p-imgs:hover{
            height:180px;
            transition:0.3s ease;
        }
        .main-p{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            margin-top:10px;
            text-transform: capitalize;
        }
        .p-prices{
            color:black;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
            text-transform: capitalize;
        }
        .basket-icon{
            padding:5px;
        }
        .btn-add:hover{
                .basket-icon {
            color: black;
            background-color: yellow;
            padding: 5px;
            border-radius: 50%;
            transition:0.3s ease;
         }

        }
        
             </style>
</head>

<body>



    <!-- <hr> -->
    <div class="container-fluid text-center slogan">
        <h1>OUR PRODUCTS</h1>
        <h6>Chip or dip? Spicy or Sweet? Single or multipack?</h6>
        <h6 id="last-s">TRY ANOTHER ANGLE™ with a wide variety of bold flavor that will treat your taste buds.</h6>
    </div>



    <div class="container main-collection my-5">
        <div class="container text-center">
            <div class=" row align-items-start">
                <?php
$sql = "SELECT * FROM product";
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
                    <h6 class='p-prices'>$". $row['p-prize'] ."</h6>
                    <a class='btn-add' href='product.php?id=" . $row['sr'] . "'><button class='btn btn-success rounded-pill  bg-dark'><i class='fa-solid fa-basket-shopping basket-icon'></i>ADD</button></a>
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
                    <h6 class='p-prices'> $". $row['p-prize'] ."</h6>
                    <a class='btn-add' href='product.php?id=" . $row['sr'] . "'><button class='btn btn-success rounded-pill bg-dark'><i class='fa-solid fa-basket-shopping basket-icon'></i>ADD</button></a>
               </div>";
               $no = $no + 1;     
     }

     else{
         $no = 0;
    
         
    }
            
    }
}
 else {
    echo "No product found .";
}
$conn->close();
?>

            </div>
        </div>
    </div>
</body>

</html>

<?php include"partial/_footer.php"  ?>