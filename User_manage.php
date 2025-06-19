 <?php include "navbar.php"; ?>
<?php require "partial/_database.php"; ?>
<?php include "adminLogin_session.php"; ?>
 <?php

    $user = "SELECT * FROM USERS";
    $query = mysqli_query($conn,$user);

    $users = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_manage</title>
    <style>
      body{
        background: #D4DE95;
    }
    </style>
</head>
<body>
    
  <div class="container my-5  text-center">
  <table class="table  table-success table-borderless">
  <thead>
<tr class="table-primary">
      <th scope="col">srno</th>
      <th scope="col">name</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">cansel</th>

    </tr>
  </thead>
  <tbody>
    <?php
    if (mysqli_num_rows($query) > 0){


       while ($row1 = mysqli_fetch_assoc($query)){
        echo "
        <tr>
      <td> ".$row1['srno']."</td>
      <td> ".$row1['name']."</td>
      <td> ".$row1['username']."</td>
      <td> ".$row1['email']."</td>
      <td><a href='user_remove.php?id=" . $row1['srno'] . "'><i class='fa-solid fa-xmark markk'></i></a></td>
     

    </tr>";
       }
      }
       
    ?>

</table>

  </div>

</body>
</html>