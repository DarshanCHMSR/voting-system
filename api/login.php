<?php
session_start();
include('connect.php');

$mobile=$_POST['mobile'];
$password=$_POST['password'];
$role=$_POST['role'];

$check=mysqli_query($connect,"SELECT * FROM user WHERE mobile='$mobile' AND password='$password' AND role='$role'");
if(mysqli_num_rows($check)>0){
    $data=mysqli_fetch_assoc($check);
    $group=mysqli_query($connect,"SELECT * FROM user WHERE role=2");
    $groupsdata=mysqli_fetch_all($group,MYSQLI_ASSOC);  
    $_SESSION['data']=$data;
    $_SESSION['groupsdata']=$groupsdata;

    echo '<script>alert("Login Success")
    window.location="../routes/dashboard.php";
    </script>';
}
else{
    echo '<script>alert("Invalid Credentials")</script>';
    echo '<script>window.location.href="http://localhost/web%20apps/voting-system/";</script>';
}

?>
