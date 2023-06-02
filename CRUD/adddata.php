<?php
include('db.php');

$username = $_POST['username'];
$number = $_POST['number'];

$query = "INSERT INTO `names`(`id`, `name`, `phone`) VALUES ('','$username','$number')";

$sql = mysqli_query($con,$query);
if($sql)
// echo "Inserted";
header("Location:index.php");

?>