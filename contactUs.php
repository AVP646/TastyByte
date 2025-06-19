
<?php
include "partial/_navbar.php"; 
?>


<?php
if(isset($_POST['send'])){
    $to = $_POST['email'] ;
    $subject =$_POST['sub'] ;
    $mesej = $_POST['mesej'];
    $from = "pankajmm35@gmail.com" ;
    $header ="From : $from " ;

    mail($to,$subject,$mesej,$header);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        .contact-form {
            background-color: #BAC095;
            padding: 20px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <form class="contact-form" action="contactUs.php" method="post">
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email *</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Subject *</label>
                        <input type="text" class="form-control" id="sub" name="sub" placeholder="Enter Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message *</label>
                        <textarea class="form-control" id="message" name="mesej" rows="4" placeholder="Enter Your Message" required></textarea>
                    </div>
                    <button type="submit" name="send" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include "partial/_footer.php"; ?>