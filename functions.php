<?php
include_once"function.php";
$x = 5;

if (isEven($x)){//$x is argument
    echo "{$x} is Even number";
}else{
    echo "{$x} is Odd number";
}
echo  PHP_EOL;


$x="7";
echo "factorial of {$x} is " .factorial($x);
echo PHP_EOL;
