<?php
function isEven($n){//$n is parameter
    if($n%2==0){
        return true;
    }return false;
}

$x=101;
if (isEven($x)){//$x is argument
    echo "{$x} is Even number";
}else{
    echo "{$x} is Odd number";
}