<?php
header('location:login.php');
session_start();
$username = "root";
$host = "localhost";
$password = "";
$database = "register";
$connection= mysqli_connect($host,$username,$password,$database);

$Name = $_POST['user'];
$Password = $_POST['pass'];

$select_query = "SELECT * FROM `users` WHERE jina ='$Name'";

$result = mysqli_query($connection,$select_query);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username already taken.";
} else{
    $reg = "INSERT INTO `users`(`jina`, `siri`) VALUES ('$Name','$Password')";
    mysqli_query($connection,$reg);
    echo "Registration successful";
}