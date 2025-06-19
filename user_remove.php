<?php include "partial/_database.php"; ?>
<?php   
    session_start(); 
    
?>
<?php
  
$id = $_GET['id'];
$query = " DELETE  FROM users where srno='". $id ."'";
$result = mysqli_query($conn,$query);
// $query2 = "SELECT * FROM CART WHERE user = $userm ";
// $result2 = mysqli_query($conn,$query2);

// $user = mysqli_fetch_assoc($result2);

if($result){
    $query2 = " DELETE  FROM cart WHERE user= ".$_SESSION['user']."";
    header("location:User_manage.php");
}
else{
    echo "not done";
}

?>