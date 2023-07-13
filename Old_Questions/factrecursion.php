<!-- 5! = 5*(5-1)*(5-2)*(5-3)*(5-4)  // 5*4*3*2*1 = 120 -->


<?php
function fact($n)
{
    if($n == 1 || $n == 0){
        return 1;
    }
    else{
        return $n * fact($n-1); 
    }
}
echo fact(5);
?>