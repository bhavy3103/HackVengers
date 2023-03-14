<?php
require "connection.php";

$enroll = htmlspecialchars($_POST['enrollment']);
$pass = md5($_POST['pass']);

$sql = $conn->prepare("SELECT * FROM seller WHERE (`enrollment` = '$enroll') AND `password` = '$pass'");

if($sql->execute()){
    if($sql->rowCount() > 0){
        echo "<script> alert('Login DONE!')</script>";
        echo "<script> window.open('./dashboard.php','_self')</script>";
    }else{
        echo "<script> alert('Invalid credentials!')</script>";
        echo "<script> window.open('./login.php','_self')</script>";
    }
}else{
    echo "<script> alert('Something went wrong!')</script>";
    echo "<script> window.open('./login.php','_self')</script>";
}
