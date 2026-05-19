<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "eco_maroc"; // Smiya li f phpMyAdmin dyalk

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>