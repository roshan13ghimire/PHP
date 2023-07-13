<?php
$myfile = fopen("hello.txt", "a") or die("Unable to open file!");
$txt = "Sumit Thapa\n";
fwrite($myfile, $txt);
fclose($myfile);
?>