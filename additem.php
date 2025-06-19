<?php require "partial/_database.php"; ?>
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

    if($result2){
        header("location:index.php");
    }
    else{
        echo "kya yaar";
    }

   
}


?>