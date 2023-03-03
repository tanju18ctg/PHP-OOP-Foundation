<?php 


function printNumber($i){

    if($i > 10){
        return;
    }
    echo $i."\n";
    $i++;
    printNumber($i);
}

//printNumber(0);

function digitPrint($start, $end)
{
    if($start > $end){
        return ;
    }
    echo $start."\n";
    $start++;
    digitPrint($start, $end);
}

digitPrint(10,20);