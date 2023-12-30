<?php
$host="localhost";
$user="root";
$pass="";
$db="egp";

$con=mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
    die(mysqli_connect_error());
}
?>