<?php

include("db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO LOGIN VALUES('','$username','$password')";
$query = mysqli_query($con,$sql);
if($query){
    echo "Inserted";
}
else{
    echo "Not inserted";
}



?>