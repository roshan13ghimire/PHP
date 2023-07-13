<?php
$myfile = fopen("hello.txt", "w") or die("Unable to open file!");
$txt = "Sumit Thapa\n";
fwrite($myfile, $txt);
fclose($myfile);
?>