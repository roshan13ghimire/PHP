<?php

include('db.php');

$id = $_GET['id'];
$uname = $_POST['username'];
$number = $_POST['number'];

$sql = "UPDATE `names` SET `name`='$uname',`phone`='$number' WHERE id =$id";
$query = mysqli_query($con,$sql);
if($query)
{
    // echo "Updated";
    header("Location:index.php");
}
else{
    echo "not Updated";
}

?>