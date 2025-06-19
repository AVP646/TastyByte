<?php include "navbar.php"; ?>
<?php include "partial/_database.php"; ?>
<?php include "adminLogin_session.php"; ?>
<?php

$name = $_POST['title'];
$prize = $_POST['prize'];
$image = $_FILES['image'];
$target_dir = "Product/"; 
$target_file = $target_dir.($image["name"]);
  
if(move_uploaded_file($image['tmp_name'],$target_file)){
   $sql = "INSERT INTO `product` (`p-image`, `p-name`, `p-prize`) VALUES ('$target_file', '$name', '$prize');";
   $result = mysqli_query($conn,$sql);
}
else{
    echo "not uploaded";
}

//  header('location:testing.html');
?>


<?php
  // session_start();
    // $user = $_SESSION['user'];
    $query3 = " SELECT * FROM product ";
    $result3 = mysqli_query($conn,$query3);
?>


<?php
  
// $id = $_GET['id'];
// $query = " DELETE  FROM product where sr='". $id ."'";
// $result = mysqli_query($conn,$query);

// if($result){
//     // header("location:Product_manage.php");
// }
// else{
//     echo "not done";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poduct Manage</title>
  <link rel="stylesheet" href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
  <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <style>
    body{
        background: #D4DE95;
    }
  </style>
</head>

<body>
  <div class="container  my-5">
    <div class="container">
      <div class="row">
        <div class="col side-c">
          <h2>upload product page detail here</h2><br>
          <form action="Product_manage.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="image" class="form-label">Product Image</label>
              <input type="file" class="form-control" id="image" name="image" aria-describedby="" required>
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="name" name="title" aria-describedby="" required>
            </div>
            <div class="mb-3">
              <label for="prize" class="form-label">Product Prize</label>
              <input type="text" class="form-control" id="prize" name="prize" aria-describedby="" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  



  
  <div class="container my-5  text-center">
  <table class="table  table-success table-borderless" id="myTable">
  <thead>
<tr class="table-primary">
      <th scope="col">product</th>
      <th scope="col">Name</th>
      <th scope="col">Prize</th>
      <th scope="col">cancel</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (mysqli_num_rows($result3) > 0){


       while ($row1 = mysqli_fetch_assoc($result3)){
        echo "
        <tr>
      <td><img src= ".$row1['p-image']." class='' height='150em' alt=''></td>
      <td> ".$row1['p-name']."</td>
      <td> ".$row1['p-prize']."</td>
      <td><a href='product_remove.php?id=" . $row1['sr'] . "'><i class='fa-solid fa-xmark markk'></i></a></td>
     

    </tr>";
       }
      }
       
    ?>

</table>

  </div>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable');
    </script>
</body>
</html>