<?php
include("conn.php");
if(isset($_POST['submit'])){
$id =$_REQUEST['schemename'];
$schemename = $_POST['schemename1'];
$desc = $_POST['description'];
$startdate = $_POST['startdate'];
$lastdate = $_POST['lastdate'];
$q="update schemesid set schemename='$schemename',description='$desc',uploadeddt='$startdate',lastdate='$lastdate' where schemename='$schemename'";  
$query=mysqli_query($con,$q);
header('location:viewschemes.php');
}
?>
<body  background-image="feedbackbg2(1).png" width="100%" background size="cover" background-repeat="no-repeat" background position="center">
	<center>
    <?php 
            $id =$_REQUEST['schemename'];
            $q ="select * from schemesid where schemename='$id'";
            $query = mysqli_query($con,$q);
            $res =mysqli_fetch_array($query);
            ?>
		
        <div id="login-form" >
                <h1 style="color:rgb(45, 45, 237);  font-family:Times New Roman">Update</h1>   
	
<form class=form-box action="#" method="post">
            
<p>            
			<label for="aadhaar">Scheme_Name:</label>
			<input class=input-field type="text" value="<?php echo $res['schemename']; ?>" name="schemename1" id="aadhaar" placeholder="required Scheme_name" required >			
            </p>			
        <label for="number1">Description:</label>
            <input class=input-field type="text" name="description" id="number1" value="<?php echo $res['description']; ?>" placeholder="required Description" required>
            </p><br>
             <label for="number1">Date:</label>
            <input class=input-field type="date" name="startdate" id="number1" value="<?php echo $res['uploadeddt']; ?>" placeholder="required Start date" required>
            </p><br>
            <label for="number1"> Lastdate:</label>
            <input class=input-field type="date" name="lastdate" id="number1" value="<?php echo $res['lastdate']; ?>" placeholder="required Last date" required>
            </p><br>
			<input type="submit" value="update" name="submit">
		</form>
    </div>
    </div>
	</center>
</body>
</html>



<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    #login-form{
    background-image:conic-gradient( from -45deg,rgb(250, 237, 237),rgb(255, 217, 0) ); 
    height: 100%;
    }
    .form-box{
    width: 380px;
    display:-ms-inline-grid;
    height: 100%;
    position: relative;
    margin: 2% auto;
    background:transparent;
    border-color: black;
    border-radius: 60px4
    padding:10px;
    overflow:hidden;
    outline:black;
    }
    .submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: #1c24f5;
    border:0;
    outline: none;
    border-radius: 30px;
    margin-top: 30;
    margin-bottom: 34;

}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0 ;
    border-left: 0;
    border-top:0;
    border-right: 0;
    border-bottom: 1px solid rgb(17, 1, 1);
    outline:none;
    background:transparent;
    color: rgb(10, 9, 9);
}
.check-box{
    margin: 30px 10px 34px 0;
}
.button-box{
    width: 220px;
    margin: 65px ;
    position:absolute;
    box-shadow:0 0 20px 9px #f40303f0;
    border-radius: 30px;
    
    
}

.btn{
    top: 0;
    left: 0;
    position: absolute;
    width:110px;
    height:"100%";
    background: #F3c693;
    border-radius:30px;
    transition: .5s;

}
#login{

left: 50px;

}
.submit-btn:hover{
  color:aliceblue;
}
.login-input{

color:white;
font: size 15px;
}

.input-group-login{
    top: 150px;
    position: absolute;
    width: 280px;
    transition: .5s;
    
}
input-group-register{
    top: 120px;
    position: absolute;
    width: 280px;
    transition: .5s;

}
#Register{

left:450px;
}
.Register-input{
color: white;
font-size: 15px;
}
</style>