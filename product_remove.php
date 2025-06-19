<?php include "partial/_database.php"; ?>
<?php
  
$id = $_GET['id'];
$query = " DELETE  FROM product where sr='". $id ."'";
$result = mysqli_query($conn,$query);

if($result){
    header("location:Product_manage.php");
}
else{
    echo "not done";
}

?>