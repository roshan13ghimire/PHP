<?php

include('db.php');

$id = $_GET['id'];

$query = "DELETE FROM `names` WHERE id = $id";

$sql = mysqli_query($con,$query);
if($sql)
// echo "DELETED";
header("Location:index.php");
?>