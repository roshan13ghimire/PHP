<?php

include("db.php");

$username = $_POST['username']; 
$password = $_POST['password']; 

$sql = "SELECT * from login where username = '$username' and  password = '$password'";

$query = mysqli_query($con,$sql);
if($query)
{
    $result = mysqli_fetch_assoc($query);
    $username1 = $result['username']; 
    $password1 = $result['password'];  

    if($username == $username1 && $password == $password1){
        echo "Login Successfully";
    }
    else{
        echo "Invalid username or password";
    }
}

?>