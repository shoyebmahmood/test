<?php
function evenOrOdd($n){//$n is parameter
    if($n%2==0){
        return true;
    }return false;
}

$x=101;
if (evenOrOdd($x)){//$x is argument
    echo "{$x} is Even number";
}else{
    echo "{$x} is Odd number";
}