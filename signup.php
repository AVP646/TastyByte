 <?php require "partial/_navbar.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup</title>
</head>

<body>
 
  <?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include "partial/_database.php";
  $name = $_POST['name']; 
  $email = $_POST['email'];
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $pass1 = $_POST['pass1'];

  // check the user name exist or not 

  $exsql = "SELECT * FROM users WHERE username='$user'";
  $result2 = mysqli_query($conn,$exsql);
  $num2 = mysqli_num_rows($result2);

  if($num2 > 0)
  {
    alert3();
  }
  else
  {
  if($pass == $pass1) 
  {
    $hash = password_hash($pass,PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (`name`, `username`, `email`, `password`, `date`) VALUES ('$name', '$user', '$email', '$hash' ,  current_timestamp())";
    $result = mysqli_query($conn,$sql);
    alert2();
     session_start();
        
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;


    header ("location:login.php");
  }
  else 
  {
    alert();
  }
  }
}



?>


  <div class="container my-5">
    <h1>Signup here</h1>
    <form action="signup.php" method="post" autocomplete="off">
      <div class="mb-3">
        <label for="name" class="form-label">NAME</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>
       <div class="mb-3">
        <label for="user" class="form-label">username</label>
        <input type="text" name="user" class="form-control" id="user">
      </div>
       <div class="mb-3">
        <label for="emial" class="form-label">E-mail</label>
        <input type="emial" name="email" class="form-control" id="email">
      </div>
      <div class="mb-3">
        <label for="pass" class="form-label">password</label>
        <input type="text" name="pass" class="form-control" id="pass">
      </div>
      <div class="mb-3">
        <label for="pass1" class="form-label">confirm password</label>
        <input type="text" name="pass1" class="form-control" id="pass1">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>



<?php

  function alert()
  {
      
  echo 
      "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>Failed</strong> Password does not match
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
  }
?>

<?php

  function alert2()
  {
      
  echo 
      "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>success</strong> your account has been created please login 
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
  }
?>


<?php

  function alert3()
  {
      
  echo 
      "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>sorry! </strong> the username already exists please try another 
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
  }
?>