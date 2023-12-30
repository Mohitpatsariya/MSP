<?php
include("conn.php");
$scheme= $_GET['schemename'];
$q = "delete from schemesid WHERE schemename = '$scheme' ";
mysqli_query($con,$q);
?>
<br><br><br><br><br>
<div class="alert alert-success" role="alert" style="text-align:center">
 Feedback Removed Successfully !!
</div>
<?php
header('refresh:2;viewschemes.php');
?>