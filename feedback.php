<?php
include("conn.php");

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$desc = $_POST['description'];
$q="insert into feedback (name,email,feedback,description) values('$name','$email','$feedback','$desc')";

  if (mysqli_query($con, $q)) {
      echo "<script>alert('Give feedback successfully');</script>";
      header("refresh:1;feedbackhtml.php");
    } 
  else {
      echo "Error: " . $q . "<br>" . mysqli_error($con);
 
      mysqli_close($con);
} 
}
?>