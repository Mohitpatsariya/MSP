<?php
include("conn.php");
if (isset($_POST['submit'])) {
    session_start();
    $adminname=$_POST['name'];
    $password=$_POST['password'];
    $q= "select * from  admin where name ='$adminname'and password='$password'";
    $res=mysqli_query($con,$q);

    if(mysqli_num_rows($res)>0){ 
        $_SESSION['u']=$adminname;
        echo "<script>alert('Admin login Successful !');</script>";
        header("location:adminpannel.php");
    }
    else{
        echo "<script>alert('Invalid username and password !');</script>";
        header("refresh:2;Adminlogin.php");
    } 
}
?>