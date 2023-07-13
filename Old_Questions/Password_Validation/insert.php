<?php

$con = mysqli_connect("localhost","root","","schems");
if($con){
    // echo "connected";
    $email  = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    if($password == $rpassword){
        $sql = "INSERT INTO login VALUES ('','$email','$password')";
        $query = mysqli_query($con,$sql);
        if($query){
            echo "Inserted";
        }
        else{
            echo "Not inserted";
        }
    }
    else{
        echo "Password doesn't match";
    }
}
else{
    echo "not connected";
}
?>