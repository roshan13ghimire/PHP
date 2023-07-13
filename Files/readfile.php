<?php
$myfile = fopen("hello.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("hello.txt"));
fclose($myfile);
?>