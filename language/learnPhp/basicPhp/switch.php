<?php

// $n = 13;
// $r = $n % 2;


// switch ($r){
//     case 0 : echo "{$n} is an even number";
//     break;
//     default: 
//     echo "{$n} is odd number";
// }

// $color = 'red';

// switch ($color){
//     case 'red': 
//     case 'green':
//     echo ucwords($color)." my favorite color";
//     break;  
//     default: echo "Color is ok";

// }

// $color = "red";

// switch($color){
//     case 'red' :
//     case 'green': 
//     echo ucwords($color)." is my favorite color";
//     break;
//     default : 
//     echo "Color is ok";
// }


// $generation = "8generation";

// switch ($generation) {
//     case (string)'9generation' :
//         echo "9Genration Processor";
//     break; 
//     case (string)8 : 
//         echo 8;
//     break;
//     case (string)"8generation" :
//         echo "8Generation Processor";
//     break;
//     default :
//     echo "First Generation";
// }



$n = 10;

// if($n % 2 == 0){
//     echo "{$n} is even number";
// }else {
//     echo "{$n} is odd number";
// }

if($n % 2 == 0) :
    echo "$n is an even number";
    else : 
        echo "$n is a odd number";
    endif;