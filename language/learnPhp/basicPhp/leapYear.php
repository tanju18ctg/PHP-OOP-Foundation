<?php

// $year = 2020;

// if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
//     echo "$year is a leapyear";
// }else if($year % 4 == 0 && $year % 100 == 0){
//     echo "{$year} is not a leap year";
// }else if($year % 4 == 0){
//     echo "{$year} is a leap year";
// }else {
//     echo "{$year} is not a leap year";
// }
// echo "</br>";

// if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
//     echo "{$year} is a leap year";
// }else {
//     echo "$year is not a leap year";
// }

//Leap Year 4 / = 0, 100/ 0, 400/ = 0

$year = 2021;

if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "The {$year} is a leap year";
}elseif($year % 4 == 0 && $year % 100 == 0){
    echo "The {$year} is Not a leap year";
}elseif($year % 4 == 0){
    echo "The $year is a leap year";

}else {
    echo "The $year is a not leap year";
}

echo "\n";

if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "The {$year} is a leap year";
}


// Password Username Checking//
// $userName = "tanju18ctg";
// $password = 1234;
// $mobile = "01819";


// if($password == 1234 && ($userName == "tanju18ctgs" || $mobile =="018190")){
//     echo "You can Login";
// }else {
//     echo "You can not login";
// }




