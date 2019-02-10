<?php
include_once "function.php";
$x = 101;

if (isEven($x)){//$x is argument
    echo "{$x} is Even number";
}else{
    echo "{$x} is Odd number";
}