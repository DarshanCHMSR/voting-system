<?php 
$connect = mysqli_connect("localhost","root","Mysql2024","voting") or die("Connection Error");
if($connect){
    echo "Connected";
}
else{
    echo "Not Connected";
}
?>