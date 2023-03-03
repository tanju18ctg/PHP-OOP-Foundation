<?php 


function isOdd($input){
    if($input % 2 != 0){
        return true;
    }
    return false;
}

function getFactorial( int $n){
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result *= $i;
    }
    return $result;
}