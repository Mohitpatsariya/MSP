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
        <h2>Feedback</h2>
        <hr>
        
        <?php
        if(isset($_SESSION['user'])){
        $user=$_SESSION['user'];
        $q ="select * from registration where aadhaar='$user'";
        $query =mysqli_query($con,$q);
        $res =mysqli_fetch_array($query);
        
        }
?>
<form action="feedback.php" method="post">
        <h3>How do you rate your overall expricence? </h3>
        <br>
          <label for="name">User Name </label>
          <input type="text" name="name" value="<?php echo $res['name']; ?>" class="form-control">   
          <br>
          <label for="name">Email or Contact </label>
          <input type="text"name="email" value="<?php echo $res['phone']; ?>" class="form-control">  
          <br>
          <label for="name">Feedback </label>
          <select name="feedback" id="" class="form-control">
            <option value="Good">Good</option>
            <option value="Average">Average</option>
            <option value="Bad">Bad</option></option>       
          </select>
          <br>
          <label for="name">Description </label>
          <textarea class="form-control" name="description" rows="" cols=""></textarea>   
          <br>
          <input type="submit" value="Add" name="submit">
        </form>
        </div>
        <br><br>
    </div>
    </div> 
   </div>  
<?php
        }
else{
?>
  <h2>Without Login u can't see user Dashboard</h2>
<?php

}        
        ?> 
<br><br><br><br><br><br><br>

<?php include("userfooter.php"); ?> 
  
































