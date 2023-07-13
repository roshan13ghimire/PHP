<?php
session_start();

echo $_SESSION['id'];
echo $_SESSION['password'];
session_destroy();
?>