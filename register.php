<?php
include("conn.php");
// $con = mysqli_connect($server,$username, $password, $dbname);
// if(!$con)
// {
//     echo"not connected";
// }
if(isset ($_POST["submit"])){
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$aadhaar = $_POST['aadhaar'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$duplicate = mysqli_query($con, "SELECT * FROM registration WHERE aadhaar = $aadhaar");
if(mysqli_num_rows($duplicate)>0){
 echo "<script> alert('Aadhaar number is already exist'); </script>";
 }
 else{
   if($password == $cpassword){
     $query = "INSERT INTO `registration`( `name`, `dob`, `phone`, `aadhaar`, `password`, `cpassword`) VALUES ('$name','$dob','$phone','$aadhaar','$password','$cpassword')";
     mysqli_query($con,$query);
     echo "<center> <br><br><br><br><h3> Registration Successful </h3> </center>";
     header('refresh:2;index.php');
   }
   
  
}
}
?>
