<?php include "partial/_database.php"; ?>
<?php include "partial/_navbar.php"; ?>
<?php
session_start();
    $user = $_SESSION['user'];
    $query3 = " SELECT * FROM cart WHERE user= '$user'";
    $result3 = mysqli_query($conn,$query3);
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$fname = $_POST['fname'];
$email = $_POST['email'];
$number = $_POST['number'];
$delivery = $_POST['delivery'];
$payment = $_POST['payment'];

    $query4 = " INSERT INTO address (`fname`, `email`, `no`, `address`, `payment`) VALUES ('$fname', '$email', '$number', '$delivery', '$payment')";
    $result4 = mysqli_query($conn,$query4);
     if($result4){
        $dl = "DELETE FROM cart WHERE user= '$user'";
    $result6 = mysqli_query($conn,$dl);
    header("location:index.php");

    }
    else{
        echo "bc";
    }
}

   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | TastyByte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #BAC095;
        }
        .checkout-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #BAC095;
            border:1px solid black;
        }
        .btn-custom {
            background-color: #ff6f61;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e85a50;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="checkout-container">
        <h2 class="text-center mb-4">Checkout</h2>
        <div class="container my-3 py-2 border">
            
<?php
if(mysqli_num_rows($result3) > 0){
     while ($row = mysqli_fetch_assoc($result3))
     {
        echo "
        <h5 class='text-center mb-4'>". $row['name'] ." </h5>";
    }
}
?>
            
        </div>
        <form action="checkout1.php" method="post">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="fname" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="tel" name="number" class="form-control" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Delivery Address</label>
                <textarea class="form-control" name="delivery" rows="3" placeholder="Enter delivery address" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Payment Method</label>
                <select class="form-select" name="payment">
                    <option>Credit/Debit Card</option>
                    <option>UPI</option>
                    <option>Cash on Delivery</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-custom text-white w-100">Place Order</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>