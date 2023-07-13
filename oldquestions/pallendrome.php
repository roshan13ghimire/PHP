<!-- racecar = racecar -->

<?php 
function checkPrime($s){

$ns = "";
for($i=strlen($s)-1;$i>=0;$i--){
    $ns =  $ns . $s[$i];
}
if($ns == $s){
    echo "Pallendrome";
}
else{
    echo "Not Pallendrome";
}
}
checkPrime("racecar");



?>