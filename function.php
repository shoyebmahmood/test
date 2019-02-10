<?php 

function isEven($n){//$n is parameter
    if($n % 2 == 0){
        return true;
    }return false;
}


/*
*type hinting in function
*/
function factorial(int $n){
    if(gettype($n) !="integer"){
        return Invalid;
        //for php bellow 7
    }
    $result=1;
    for($i=$n;$i>1;$i--){
        $result *=$n;
    }return $result;
}