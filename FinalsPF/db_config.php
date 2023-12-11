<?php
$host = "localhost";
$email = "email";
$name = "name";
$number = "number"; 
$password = "password"; 
$database = "form";

$conn = mysqli_connect($host, $email, $name, $number, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
