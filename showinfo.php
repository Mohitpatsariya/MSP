<?php
session_start();
include("conn.php");
        if(isset($_SESSION['user'])){
          $userr=$_SESSION['user']; 
          $scheme=$_REQUEST['x'];
        include("userpanelheader.php");        
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <br>
    <h6>Information that you submitted for :<span style="color:green"> <?php echo $scheme;  ?></span> </h6>  
<hr>
<table class="table table-striped" style="background-color:#ABEBC6;">
        <tr>
            <th>Aadhaar Number</th><th>First Name</th> <th> Middle Name</th> <th>Last Name</th> <th> Mobile Number</th> <th>Email</th> <th>D.O.B</th> <th>Gender</th><th> City</th> <th>State</th><th>Pancard Number</th><th>SSSM Id</th>
        </tr>
        <?php
           
             
            $q="Select * from apply where sname='$scheme' ";
            $query = mysqli_query($con,$q);
            while($res =mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><?php echo $userr; ?></td> 
            <td><?php echo $res['fname'];?></td>
            <td><?php echo $res['mname'];?></td>
            <td><?php echo $res['lname'];?></td>
            <td><?php echo $res['mobile'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $res['dob'];?></td>
            <td><?php echo $res['gender'];?></td>
            <td><?php echo $res['city'];?></td>            
            <td><?php echo $res['state'];?></td>            
            <td><?php echo $res['pancard'];?></td>           
             <td><?php echo $res['sssm'];?></td>
            </tr>
            <?php
            } }
        
        ?>

    </table>
    </div>
  </div>
</div>
<br><br><br><br><br>
<?php
include("userfooter.php");
?>