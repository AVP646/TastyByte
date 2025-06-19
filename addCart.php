<?php require "partial/_database.php"; ?>
<?php include "partial/_navbar.php"; ?>
<?php
session_start();

?>

<?php
    $user = $_SESSION['user'];
    $query3 = " SELECT * FROM cart WHERE user= '$user'";
    $result3 = mysqli_query($conn,$query3);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    body{
       background-color:#BAC095;
    }
    .input{
      border-radius:30px;
      text-align:center;
      /* width: 100px; */
    }
    .main-c {
               background-color:#BAC095;
               border:2px solid red;
               border-radius:20px;

    }
    .markk{
      margin-top:12px;
    }
  </style>
</head>

<body>


  
    <?php
    $item = mysqli_num_rows($result3);
    $prizee = 0;
    if (mysqli_num_rows($result3) > 0){
      echo"
      <div class='container my-5  text-center'>
  <table data-aos='fade-up' data-aos-duration='600' class='table  table-success table-borderless'>
  <thead>
<tr class='table-primary'>
      <th scope='col'>product</th>
      <th scope='col'>Name</th>
      <th scope='col'>Prize</th>
      <th scope='col'>quantity</th><th scope='col'>cancel</th>
    </tr>
  </thead>
  <tbody>";

       while ($row1 = mysqli_fetch_assoc($result3)){
        echo "
        <tr >
      <td><img src= ".$row1['image']." class='' height='78em' alt=''></td>
      <td> ".$row1['name']."</td>
      <td> $".$row1['prize']."</td>
      <td><input type='number' class='form-control input' name='quantity' value='1' min='1' max='15' ></td>
      <td><a href='cartRemove.php?id=" . $row1['sr'] . "'><i class='fa-solid fa-xmark markk'></i></a></td>
     

    </tr>";

    $prizee = $prizee + $row1['prize'];
        
       }
      }
      else{
        echo "
        <div class='container my-5  text-center'>
        <table data-aos='fade-up' data-aos-duration='600' class='table   table-success table-borderless'>
  <thead>
<tr class='table-primary'>
      <th scope='col'>items not found please add items first</th>
 </tr>
  </thead>";
      }
       
    ?>

</table>

  </div>



<div class="container my-5  text-center">
  <table data-aos='fade-right' data-aos-duration='600' class="table  table-success table-borderless">
  <thead>
 <tr class="table-primary">
      <th scope="col">items</th>

      <th scope="col">total</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $item; ?> </td>
     
      <td>$<?php echo $prizee; ?></td>
    </tr>

    
    </tbody>
</table>
<?php echo "
<a href='checkout1.php'><button  class='btn btn-danger'>BUY NOW</button></a>";
?>
  </div>

<?php
  function alert(){
    echo "done";
  }
?>
</body>
</html>

<?php include "partial/_footer.php"; ?>
