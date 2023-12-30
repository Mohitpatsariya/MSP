
<?php
session_start();
include("conn.php");
        if(isset($_SESSION['user'])){
        $userr=$_SESSION['user'];
        include("userpanelheader.php");        
?>

<div class="container">
   <div class="container">
    <div class="row">
        
        <div class="col-6" style="background-color:;height:400px;">
        <br>
        <h2>Profile</h2>
        <hr>
        
        <?php
 if(isset($_SESSION['user'])){
 $user=$_SESSION['user'];
 $q ="select * from registration where aadhaar='$user'";
 $query =mysqli_query($con,$q);
 $res =mysqli_fetch_array($query);
 
 }
?>

<form action="updateprofile.php" method="post">
      <div class="group">
        <label for="name">Full Name:</label> <br>
        <label for=""><b><?php echo $res['name']; ?></b></label>
      </div><br>
      <div class="group">
        <label for="dob">Date of Birth:</label><br>
        <label for=""><b><?php echo $res['dob']; ?></b></label>
      </div><br>

      <div class="group">
        <label for="phone">Phone Number:</label>
        <input type="text" class="form-control" name="phone" value="<?php echo $res['phone']; ?>" required>
      </div><br>
      <div class="group">
        <label for="aadhaar">Aadhaar Number:</label><br>
        <label for=""><b><?php echo $res['aadhaar']; ?></b></label>
      </div><br>
      <div class="group">
       
        <input type="submit" name="submit" value="Update" class="btn btn-primary" >
      </div><br>
      
        </div>
        </form> 

        </div>
        <br><br>
    </div>
    </div></div>  
<?php
        }


else{
?>
  <h2>Without Login u can't see user Dashboard</h2>
<?php

}        
?> 

<?php include("userfooter.php"); ?> 
  

