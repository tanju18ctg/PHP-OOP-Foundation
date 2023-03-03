<?php 


function printN($i){

    if($i > 20){
        return;
    }
    echo $i.PHP_EOL;
    $i++;
    printN($i);
}

//printN(1);

// function number($start, $end){
//     if($start > $end){
//         return;
//     }
//     echo $start.PHP_EOL;
//     $start++;
//     number($start, $end);
// }

// number(1, 10);


function numbers($counter, $end, $stepping){
        if($counter >= $end){
            return;
        }
        echo $counter.PHP_EOL;
        $counter+=$stepping;
        numbers($counter, $end, $stepping);
}

numbers(1, 100, 30);