<?php
include("conn.php");
if(isset($_POST['submit'])){
$id =$_REQUEST['aadhaar'];
$aadhaar = $_POST['aadhaar1'];
$name = $_POST['name1'];
$phone = $_POST['phone1'];
$dob = $_POST['dob1'];
$password =$_POST['password1'];
$cpassword =$_POST['password2'];
$q=" update registration set  name='$name',phone='$phone',dob='$dob',password='$password',cpassword='$cpassword' where aadhaar='$id' ";
$query=mysqli_query($con,$q);
header('location:Adminpannel.php');
}
?>
<!-- html code -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>register</title>
</head>
<!-- csscode -->
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
<body  background-image="feedbackbg2(1).png" width="100%" background size="cover" background-repeat="no-repeat" background position="center">
	<center>
    <?php 
            $id =$_REQUEST['aadhaar'];
            $q ="select * from registration where aadhaar='$id'";
            $query = mysqli_query($con,$q);
            $res =mysqli_fetch_array($query);
            ?>
		
        <div id="login-form" >
                <h1 style="color:rgb(45, 45, 237);  font-family:Times New Roman">Update</h1>   
	
            <form class=form-box action="#" method="post">
            
        <p>            
			<label for="aadhaar">Aadhaar-number:</label>
			<input class=input-field type="number" value="<?php echo $res['aadhaar']; ?>" name="aadhaar1" id="aadhaar" placeholder="required Aadhaar no." required >			
            </p>			
            <label for="number1">Name:</label>
            <input class=input-field type="text" name="name1" id="number1" value="<?php echo $res['name']; ?>" placeholder="required NAME" required>
            </p><br>
            <label for="number1">Phone:</label>
            <input class=input-field type="number" name="phone1" id="number1" value="<?php echo $res['phone']; ?>" placeholder="required phone no." required>
            </p><br>
            <label for="number1">Date of birth:</label>
            <input class=input-field type="text" name="dob1" id="number1" value="<?php echo $res['dob']; ?>" placeholder="required Date of birth" required>
            </p><br>

        <p>
                <label for="number">Password:</label>
                <input class=input-field type="password" name="password1" value="<?php echo $res['password']; ?>" id="number" placeholder="required Number" required>
                </p>
        <p>
			<label for="password">Confirm-Password:</label>
			<input class=input-field type="Password" name="password2" value="<?php echo $res['cpassword']; ?>" id="password" placeholder="required password" required>
			</p><br>
            <input type="checkbox" class="checkbox"> I agree to the terms and condition<br><br>
			<button class="submit-btn" type="submit" value="Submit" name="submit">update</Sign-up></button>
		</form>
    </div>
    </div>
	</center>
</body>
</html>
