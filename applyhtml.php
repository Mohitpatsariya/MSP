<?php
include("conn.php");
session_start();
if(isset($_SESSION['user']))
{ $userr=$_SESSION['user'];
  $schemename=$_REQUEST['x'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="userpannel.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <span class="navbar-text">
      <a class="nav-link" href="userlogoutcode.php">Logout</a>
      </span>
    </div>
  </div>
</nav>
<style>
  .row a{
    text-decoration:none;
    font-size:18px;
  }
  .row .box{
    height:auto;
    padding:10px;
    background-color:#DAF7A6;
    border:2px solid white;
    text-align:center;
    
    
  }

  .row .box a{
    color:#000;
  }
  .row .box:hover{
    background-color:#F1C40F;
    
  }
  .row .box a:hover{
    color:#fff;
    font-size:20px;
    
  }
</style>
<div class="container">
<div class="row" >
  
   <h4><br> Hii 
    <?php 
    $qu="select name from registration where aadhaar='$userr'";
    $query = mysqli_query($con,$qu);
    $res =mysqli_fetch_array($query);//Aadhaar ko convert kiya with the help of query name;
    echo $res['name'];
    ?>
    <br>
   </h4>

   

   <div class="col-4 box">
    
       <a href="profile.php">Edit Profile </a>
   </div>

   <div class="col-4 box">
   
   <?php 
    $count="select count(*) as totalsc from schemesid";
    $res=mysqli_query($con,$count);
    $t=mysqli_fetch_assoc($res);//assoc is Array
    $total=$t['totalsc'];
    ?>

    
 
       <a href="showschemes.php"> New scheme <span > ( <?php  echo $total; ?> )</span> </a>
   </div>

   <div class="col-4 box">
   
       <a href="feedbackhtml.php"> Feedback </a>
   </div>

   </div>
   

</div>

       <br><br>
  <div class="container">
   <div class="row">
    <center>
      <h5 style="color:green"> 
      <form action="applycode.php" method="POST">
        =(  <input type="text" name="schemen" value="<?php echo $schemename;  ?>" style="border:none;text-align:center;color:green" readonly > )=  </h5></center>

    <h4>Application Form </h4>
    <h6>#step1</h6>
    <hr>
    <div class="col-4">
       
             <div class="group">
             <label for="name" style="font-weight:600">Your Aadhaar Number :  <span style="color:blue;font-weight:800">#<?php echo $userr; ?></span></label> <br><br>
             <label for="name">First Name:</label>
             <input type="text" name="fname" required class="form-control">
             </div><br>

             <div class="group">
             <label for="name">Middle Name:</label>
             <input type="text" name="mname"  class="form-control">
             </div><br>

             <div class="group">
             <label for="name">Last Name:</label>
             <input type="text" name="lname" required class="form-control">
             </div><br>

             <div class="group">
             <label for="number">Mobile Number :</label>
             <input type="number" name="number" required class="form-control">
             </div><br>
     </div>
     <div class="col-4">
      <br><br>
             <div class="group">
             <label for="name">Email :</label>
             <input type="email" name="email" required class="form-control">
             </div><br>

             <div class="group">
             <label for="dob"> D.O.B:</label>
             <input type="date" name="dob" required class="form-control">
             </div><br>

             <div class="group">
             <label for="name"> Gender:</label>
             <select name="gender" id="" class="form-control">
                 <option value="Male">Male</option>
                 <option value="Female">Female</option>
                 </option>
                 </select>
              </div><br>

              <div class="group">
              <label for="name"> City:</label>
              <select name="city" id="" class="form-control">
                 <option value="">Select cities</option>
                 <option value="Gwalior">Gwalior</option>
                 <option value="Bhopal">Bhopal</option>
                 <option value="Indore">Indore</option>
                 <option value="Bhind">Bhind</option>
                 <option value="Ujjain">Ujjain</option>
                 <option value="Chhatarpur">Chhatarpur</option>
                 <option value="Chhindwara">Chhindwara</option>
                 <option value="Chichli">Chichli</option>
                 <option value="Chorhat">Chorhat</option>
                 <option value="Daboh">Daboh</option>
                 <option value="Dabra">Dabra</option>
                 <option value="Damoh">Damoh</option>
                 <option value="Datia">Datia</option>
                 <option value="Deori Khas">Deori Khas</option>
                 <option value="Depalpur">Depalpur</option>
                 <option value="Dewas">Dewas</option>        
                 </option>
                 </select>
                 </div><br>
      </div>
      <div class="col-4"><br><br>
            <!-- India states  -->
            <div class="group" >
            <label for="country-state"> States:</label><br>
            <select id="country-state" class="form-control" name="state">
             <option value="">Select state</option>
             <option value="andhra pradesh">Andhra Pradesh</option>
             <option value="arunachal pradesh">Arunachal Pradesh</option>
             <option value="bihar">Bihar</option>
             <option value="chandigarh">Chandigarh</option>
             <option value="chhattisgarh">Chhattisgarh</option>
             <option value="delhi">Delhi</option>
             <option value="goa">Goa</option>
             <option value="gujarat">Gujarat</option>
             <option value="haryana">Haryana</option>
             <option value="kerala">Kerala</option>
             <option value="madhya pradesh">Madhya Pradesh</option>
             <option value="maharashtra">Maharashtra</option>
             <option value="punjab">Punjab</option>
             <option value="rajasthan">Rajasthan</option>
             <option value="uttar pradesh">Uttar Pradesh</option>
             <option value="west bengal">West Bengal</option>
             </select>
             </div><br>

             <div class="group">
             <label for="name">Address :</label><br>
             <textarea name="address" id="" class="form-control"></textarea>
             </div><br> 
     </div>
     <hr>
     <h6>#step2</h6>
     <div class="col-4">
             <div class="group">
             <label for="name">Pancard Number :</label>
             <input type="text" name="pancard" id="" class="form-control">
             </div><br>

             <div class="group">
             <label for="name">SSSM-Id :</label>
             <input type="text" name="sssm" id="" class="form-control">
             </div><br>
      
          </div>
 
          
          <div class="col-4">
          <center>
            <br><br><br><br><br><br><br>
            <input type="submit" value="submit" name="submit" class="btn btn-success">
          </center>  
          </div>
             </div>
             </div>
        </form>

    <br><br>
    <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
    <center>
    <span class="text-muted">E-Gram Panchayat 2.0 © Copyright 2023, All Rights Reserved </span>
    </center>
    </div>
</footer>
<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 


<?php
}
else{
  echo "<script> alert('Login first if you are member otherwise register yourself .');</script>";
  header("refresh:1;userloginhtml.php");
}
?>















<!-- 2nd form -->
<!-- <form action="SEND ADDRESS" id="ft-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
  <fieldset>
    <legend>LADLI_LAXMI_YOUGNA</legend>
    <label>
      Application form
    </label>
  </fieldset>
  <fieldset>
    <legend>Personal data</legend>
    <div class="two-cols">
      <label>
        First name 
        <input type="text" name="First name" required class="form-control">
      </label>
      <label>
        Last name 
        <input type="text" name="Last name" required class="form-control"><br>
      </label>
    </div>
    <div class="two-cols">
      <label>
        Citizenship
        <input type="text" name="Citizenship" class="form-control">
      </label>
      <label>
        Date of birth
        <input type="date" name="Date of birth"class="form-control">
      </label>
    </div>
    <label>
      Address
      <input type="text" name="Address"class="form-control">
    </label>
    <div class="two-cols">
      <label>
        ZIP Code
        <input type="text" name="ZIP" class="form-control">
      </label>
      <label>
        City
        <input type="text" name="City" class="form-control">
      </label>
    </div>
    <div class="two-cols">
      <label>
        Phone 
        <input type="tel" name="Phone" required class="form-control">
      </label>
      <label>
        Email address 
        <input type="email" name="Email" required class="form-control">
      </label>
    </div>
  </fieldset>
  <fieldset>
    <legend>Application documents</legend>
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
    <div class="two-cols">
      <label>
        SSSM_Id_photo:
        <input type="file" name="Application letter" accept=".doc,.docx,.pdf">
      </label>
      <label>
        Aadhaar card photo:
        <input type="file" name="Curriculum vitae" accept=".doc,.docx,.pdf">
      </label>
    </div>
    <p>Possible file types: DOC, PDF. Maximum file size: 10 MB.</p>
  </fieldset>
  <div class="btns">
    <input type="text" name="_gotcha" value="" style="display:none;">
    <input type="submit" value="Submit application">
  </div>
</form> -->
