<?php 
    include("conn.php");  
    if(isset($_POST['submit'])){
        session_start();
        $schemename=$_POST['schemen'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $mobile=$_POST['number'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $address=$_POST['address'];
        $pancard=$_POST['pancard'];
        $sssm=$_POST['sssm'];
        $q=" insert into apply(sname,fname,mname,lname,mobile,email,dob,gender,city,state,address,pancard,sssm) 
        values('$schemename','$fname','$mname','$lname','$mobile','$email','$dob','$gender','$city','$state','$address','$pancard','$sssm')";
        if (mysqli_query($con, $q)) {
            echo "<script>alert('New schemes created successfully');</script>";
            header("refresh:1;userpannel.php");
          } else {
            echo "Error: " . $q . "<br>" . mysqli_error($con);
          }
          
          mysqli_close($con);






    }













?>