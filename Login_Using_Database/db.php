<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "loginsignup";

$con = mysqli_connect($server,$user,$pass,$dbname);
if($con){
    // echo "connected";
}
else{
    echo "not connected";
}
?>