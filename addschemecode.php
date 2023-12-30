<?php
include("conn.php");
if (isset($_POST['submit'])) {
    $schemename=$_POST['scheme'];
    $lastdate=$_POST['lastdate'];
    $desc=$_POST['des'];
    $date=date("Y/m/d");
    $q="INSERT INTO schemesid (schemename,description,uploadeddt,lastdate) VALUES ('$schemename','$desc','$date','$lastdate')";  
    if (mysqli_query($con, $q)) {
        echo "<script>alert('New schemes created successfully');</script>";
        header("location:adminpannel.php");
      } else {
        echo "Error: " . $q . "<br>" . mysqli_error($con);
      }
      
      mysqli_close($con);
      
} 
?>