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
    <a class="navbar-brand" href="index.php">E-Gram Panchayat 2.0</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Schemes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">About Us</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="row">
    <div class="col-4">

    </div>
    <div class="col-4">
      <br><br>
     <h5>LOGIN FORM</h5>
     <hr>
     <form action="userlogin.php" method="post">
            <label for="username">Aadhaar Number:</label>
            <input type="text"  name="aadhaar"  class="form-control"/>
            <br />

            <label for="password">Password:</label>
            <input type="password"  name="password" class="form-control" />
            <br />

            <input type="submit" value="Login" name="submit"  class="btn btn-success"/>
            <br><br>
              <div class="signup_link">
                Don't have account ? create new account  <a href="registerhtml.php"> Register</a>
              </div>
    </form>
    </div>
    <div class="col-4">
    </div>
</div>   
<br><br><br><br>      
        
<?php include("userfooter.php");  ?>  
