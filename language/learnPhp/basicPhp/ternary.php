<?php


$number = 11;

// if(12 == $number){
//     echo "Twelbe";
// }elseif(10==$number) {
//     echo "Ten";
// }else {
//     echo "Wrong Number";
// }

// $numberSystem = $number == 10 ? "The number is Ten" : $number == 12 ? "The number is twelbe" : "Wrong Number";
// echo $numberSystem;

//   $result = (12 == $number) ? "Twelbe" : (10 == $number) ? "Ten" : "Wrong Number";
//   echo $result;

// $meter = 110;
// $digitalMeter = $meter >= 20 ? "Meter is running with Green Signal" : $meter < 20 ? "Meter is running with red signal" : $meter <= 0 ? "Meter is shutdown" : "Meter is ok";
// echo $digitalMeter;



// $m = 13;
// $number = 12== $m ? "Twelbe" : (15 == $m ? "Fifteen" : 10 == $m ? "Ten" : 13 == $m ? "Thirteen" : "others");
// echo $number;

$meterBalance = 100;
//General Syntax//
// if($meterBalance >= 20) {
//     echo "Meter is running with green singnal";
// }elseif($meterBalance == 0){
//     echo "Meter will be shutdowned";
// }elseif($meterBalance < 20){
//     echo "Meter is running with red singnal";
// }

$result  = $meterBalance >= 20 ? 'Meter is running with green singnal' : ($meterBalance == 0 ? 'Meter will be shutdowned' : ($meterBalance < 20 ? 'Meter is running with red singnal' : '')); 
echo $result;