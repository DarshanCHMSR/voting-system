<?php
include('connect.php');
$name=$_POST['name'];
$voter_ph=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$address=$_POST['address'];
$photo=$_FILES['photo']['name'];  
$tmp_name=$_FILES['photo']['tmp_name'] ;
$role=$_POST['role'];

if($password==$cpassword){
   move_uploaded_file("$tmp_name","../uploads/$photo");
   $insert=mysqli_query($connect,"INSERT INTO user(name,mobile,password,address,photo,role,status,votes) VALUES('$name','$voter_ph','$password','$address','$photo','$role',0,0)");
        if($insert){
            echo '<script>alert("Registration Successfull")</script>';
            echo '<script>window.location.href="http://localhost/web%20apps/voting-system/";</script>';
        }
        else{
            echo '<script>alert("Registration Failed")</script>';
            echo '<script>window.location.href="http://localhost/web%20apps/voting-system/routes/register.html";</script>';
        }
    }
else{
   echo'<script>alert("Password and Confirm Password does not match")</script>;
   window.location.href="http://localhost/web%20apps/voting-system/routes/register.html";';
   
    }
?>
