<?php
session_start();
$username = "root";
$host = "localhost";
$password = "";
$database = "register";
$connection= mysqli_connect($host,$username,$password,$database);

$Name = $_POST['user'];
$Password = $_POST['pass'];

$select_query = "SELECT * FROM `users` WHERE jina ='$Name' && siri = '$Password'";

$result = mysqli_query($connection,$select_query);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $Name;
    header('location:home.php');
} else{
    header('location:login.php');
}