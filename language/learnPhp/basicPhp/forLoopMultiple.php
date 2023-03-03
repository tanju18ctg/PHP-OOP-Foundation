<?php

// for($i = 0; $i<100; $i++){
//     // if ($i % 7 == 0) echo $i."\n";
//     // if ($i % 11 == 0) echo $i."\n";
//     // echo $i % 7 ==0 ? $i : '';
//     // echo $i % 11==0 ? $i : '';
// }

// for($i = 0, $j =1; $i<100; $i+=7, $j+=11){
//     //echo $i."\n";
//     echo $j< 100 ? $j."\n": "";
// }

for($i = 5; $i < 40; $i++){
    if($i<22){
    continue;
    }
    echo $i;
    echo PHP_EOL;
}


