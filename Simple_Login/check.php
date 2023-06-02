<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "pokhara university"){
    echo "Login successfully";
}
else{
    echo "Username or password is invalid";
}

?>