<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup</title>
  <style>
    .title{
      text-align:center;
      font-family: Arial, Helvetica, sans-serif;
    font-weight: 600;
    text-transform: capitalize;
    }
    .contact-form {
            background-color: #BAC095;
            padding: 20px;
            border-radius: 15px;
        }

        .btn{
          width:130px;
        }
  </style>
</head>

<body>
  <?php require "partial/_navbar.php"; ?>
  <?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include "partial/_database.php";

  $user = $_POST['user'];
  $pass = $_POST['pass'];

    // $sql = "SELECT * FROM  users WHERE username='$user' AND password='$pass'";
    $sql = "SELECT * FROM users  WHERE username='$user'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num == 1)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        if(password_verify($pass , $row['password']))
        {
         session_start();
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;
         $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];


        header("location:index.php");
        }
         else
         {
             alert2();
         }
      }
    }
    
    else{
        alert();
    }
}

?>


  <div class="container col-md-6 my-5 contact-form ">
    <h1 class="title">Login here</h1>
    <form  action="login.php" method="post" autocomplete="off">
      <div class="mb-3">
        <label for="user" class="form-label title">username</label>
        <input type="text" name="user" class="form-control" id="user" required>
      </div>
      <div class="mb-3">
        <label for="pass" class="form-label title">password</label>
        <input type="text" name="pass" class="form-control" id="pass" required>
      </div>
     
      <button type="submit" class="btn btn-primary">Login</button>
      
    </form><br>
    <h4>you dont have an account! please sign up?</h4>
    <a  href="signup.php"> <button type="submit" class="btn my-1 btn-primary">Sign up</button></a>
  </div>
</body>

</html>



<?php

  function alert()
  {
      
  echo 
      "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>Failed</strong> You dont have an account please sign up first
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
  }
?>


<?php

  function alert2()
  {
      
  echo 
      "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>Failed</strong> invalid password try again
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
  }
?>
  



  <?php include "partial/_footer.php"; ?>