<?php include "partial/_database.php"; ?>
<?php   
    session_start(); 
    
?>
<?php
  
$id = $_GET['id'];
$query = " DELETE  FROM address where sr='". $id ."'";
$result = mysqli_query($conn,$query);
// $query2 = "SELECT * FROM CART WHERE user = $userm ";
// $result2 = mysqli_query($conn,$query2);

// $user = mysqli_fetch_assoc($result2);

if($result){
    // $query2 = " DELETE  FROM address  WHERE user= ".$_SESSION['user']."";
    header("location:Order_manage.php");
}
else{
    echo "not done";
}

?>