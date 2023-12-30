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
      <a class="nav-link" href="adminlogoutcode.php">Logout</a>
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
      session_start();
      if(isset($_SESSION['u'])){
          $userr=$_SESSION['u'];
      echo $userr;
      }    
    ?> 
    <br>
   </h4>

   

   <div class="col-3 box">
     <a href="addschemehtml.php">Add Scheme</a>
   </div>

   <div class="col-3 box">
    <a href="viewschemes.php"> View Scheme </a>
   </div>

   <div class="col-3 box">
     <a href="viewuser.php">View User</a>
   </div>

   <div class="col-3 box">
     <a href="viewfeedback.php">User feedback</a>
   </div>

   </div>
   

</div>



