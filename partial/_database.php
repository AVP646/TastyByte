<?php
$conn =  mysqli_connect("localhost", "root", "", "TastyByte");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>