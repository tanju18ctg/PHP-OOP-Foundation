<?php

// Function of Even or Odd Number //
function isEven($n){
    if($n % 2 == 0){
        return true;
    }
    return false;
}


// Function for Factorial Value//
function factorial(int $n){
    $result = 1;
        for($i = $n; $i>1; $i--){
            $result *= $i;
        }
        return $result;
}


function serve($foodType="Cofee", $FoodNumber = "a Cup"){
        echo "{$FoodNumber} of {$foodType} has been served ";
}

//this function for summation //

function sum(int $x, int $y, int $z): int{
    return $x + $z + $y;
}

$result = sum(23,455,55);

//var_dump($result);


//This function for multiple Paremeter//

function summation( int ...$numbers) : int{
    
    $result = 0 ;
        for($i = 0; $i<count($numbers); $i++){
            $result += $numbers[$i];
        }
        return $result;
}




// this function for recursion// 

