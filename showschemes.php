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
        
        <div class="col-12" style="background-color:;height:400px;">
             <br>
              <h2>New scheme</h2>
              <hr>
<?php
      if(isset($_SESSION['user'])){
      $user=$_SESSION['user'];
      $q ="select * from registration where aadhaar='$user'";
      $query =mysqli_query($con,$q);
      $res =mysqli_fetch_array($query);
      
      }
?>

<?php 
    $count="select count(*) as totalsc from schemesid";
    $res=mysqli_query($con,$count);
    $t=mysqli_fetch_assoc($res);//assoc is Array
    $total=$t['totalsc'];
?>


        <table class="table">
            <tr><th>Scheme Name </th> <th>Description </th> <th>start date</th><th>Last date</th> <th>Apply</th></tr>
        <?php 
            $query1="select * from schemesid ";
            $query2 = mysqli_query($con,$query1);
            
            while($result =mysqli_fetch_array($query2)){
             ?> 

                   <tr><td><?php echo $result['schemename'];  ?> </td> 
                   <td><?php echo $result['description'];  ?>  </td> 
                   <td><?php echo $result['uploadeddt'];  ?></td>
                   <td><?php echo $result['lastdate'];  ?></td> 
                   <td><a href="applyhtml.php?x=<?php echo $result['schemename'];  ?>">apply</a></td></tr> 
       <?php
            }
        ?>    
      
       </table>
        </div>
      <br>
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
        <br><br><br><br><br>
<?php include("userfooter.php"); ?> 
  


































