<?php
function evenOrOdd($n){
    if($n%2==0){
        return true;
    }return false;
}

$x=11;
if (evenOrOdd($x)){
    echo "{$x} is Even number";
}else{
    echo "{$x} is Odd number";
}