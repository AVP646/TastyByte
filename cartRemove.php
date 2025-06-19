<?php include "partial/_database.php"; ?>
<?php
  
$id = $_GET['id'];
$query = " DELETE  FROM cart where sr='". $id ."'";
$result = mysqli_query($conn,$query);

if($result){
    header("location:addCart.php");
}
else{
    echo "not done";
}

?>