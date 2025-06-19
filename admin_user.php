<?php  include "navbar.php"; ?>
<?php  include "partial/_database.php"; ?>
<?php include "adminLogin_session.php"; ?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <style>
    body {
      background-color: bisque;
    }

    .user-main {
      background-color: rgba(255, 255, 255, 0.5);
      border: 2px solid rgba(255, 255, 255, 0.5);
      border-radius: 30px;
      box-shadow: 0 0 50px 15px #808283;
    }

    .user-main a {
      text-decoration: none;
    }

    .user-main2 {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .user-img {
      height: 200px;
      width: 200px;
      border-radius: 50%;
      background: url("partial/user-image.avif");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body>
  <div class="container user-main">
    <div class="container my-5 user-main2">
      <div class="user-img"></div>
    </div>
    <div class="container my-3">
      <div class="row align-items-start">
        <div class="col ">
          <h3>NAME </h1>
        </div>
        <div class="col">
          <H4><?php echo $_SESSION['nameA']; ?></H2>
        </div>

        <div class="container my-3">
          <div class="row align-items-start">
            <div class="col">
              <h3>USER </h1>
            </div>
            <div class="col">
              <H4><?php echo $_SESSION['admins']; ?></H2>
            </div>

            
              </div>
              <a href="logout.php"><button type="button"
                  class="btn btn-danger d-grid gap-2 my-5 col-3 mx-auto">Logout</button></a>
            </div>
          </div>


          <?php include "partial/_footer.php"; ?>
</body>

</html>