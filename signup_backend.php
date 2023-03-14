<?php
require "./connection.php";

$enroll = htmlspecialchars($_POST['enrollment']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$mobile = htmlspecialchars($_POST['mobile']);
$password = md5($_POST['pass']);

$sql = $conn->prepare("INSERT INTO seller (`enrollment`, `name`, `email`, `mobile`, `password`) VALUES('$enroll', '$name', '$email', '$mobile', '$password')");

if($sql->execute()){
    echo "<script>alert('Registration Successful')</script>";
    echo "<script>window.open('./login.php','_self')</script>";
}else{
    echo "<script>alert('Registration Not Successful')</script>";
    echo "<script>window.open('./signup.php','_self')</script>";
}
?>