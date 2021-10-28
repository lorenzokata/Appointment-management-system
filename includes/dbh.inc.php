<?php 


$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "book-appointment";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die('conn faild:' . mysqli_connect_error());
};