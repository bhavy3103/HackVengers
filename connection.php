<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "book_buynsell";
ini_set('error_reporting', -1);
ini_set('display_errors', 1);
ini_set('html_errors', 1);

try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
} catch (PDOException $e) {
    echo "Connection Failed".$e->getMessage();
    die();
}