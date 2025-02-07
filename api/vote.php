<?php
session_start();
include('connect.php');
$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['data']['id'];

$update_votes=mysqli_query($connect,"UPDATE user SET votes='$total_votes' WHERE id='$gid'");
$update_user_status=mysqli_query($connect,"UPDATE user SET status='1' WHERE id='$uid'");

if($update_votes && $update_user_status){
    $groups=mysqli_query($connect,"SELECT id,name,votes,photo FROM user where role='2'");
    $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
    $_SESSION['data']['status']=1;
    $_SESSION['groupsdata']=$groupsdata;
    echo '<script>alert("Successfully voted")
    window.location="../routes/dashboard.php"; </script>';

}
else{
    echo '<script>alert("Failed to vote")</script>
    window.location.href="../routes/dashboard.php";';
}
?>
