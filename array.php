<?php

//check empty value in array
$name = 12;
if(isset($name) && (is_numeric($name) || $name != '')){
    echo "Name is set it's not empty!";
}else{
    echo "Name is not set or it's empty";
}