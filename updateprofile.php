<?php

include("conn.php");
session_start();
if(isset($_SESSION['user'])){
$userr=$_SESSION['user'];

if(isset($_POST['submit'])){
$phone = $_POST['phone'];

$q="update registration set  phone='$phone' where aadhaar='$userr' ";
;
if (mysqli_query($con, $q)) {
    echo "<script>alert('updated successfully');</script>";
    header("refresh:1;profile.php");
  } 
else {
    echo "Error: " . $q . "<br>" . mysqli_error($con);

    mysqli_close($con);
} 
}}
?>