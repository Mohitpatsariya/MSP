
<?php include("adminheader.php");?>

<div class="container">
  <div class="row">
     <div class="col-8">
      <br><br>
      <h4>Add Scheme</h4>
      <hr>
     <form action="addschemecode.php" method="post">
  
        <label> Scheme Name</label>
        <input type="text" name="scheme" id="" class="form-control">
        <br>
        <label>Description</label>
        <input type="text" name="des" id="" class="form-control">
         <br>
        <label>Last Date of Scheme</label>
        <input type="text" name="lastdate" id="" class="form-control">
         <br>
        <input type="submit" value="Add Scheme" class="btn btn-success" name="submit">

     </form>

     </div>
    
  </div>

</div>
  
<br><br><br><br>

<?php include("userfooter.php"); ?>