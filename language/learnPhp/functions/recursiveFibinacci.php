<?php 
// Recursive function
function fibonacci($old, $new, $end){
    static $start;
    $start ??
    if($start > $end){
        return;
    }

    $start++;
    echo $old.PHP_EOL;
   $temp =  $old + $new;
   $old = $new;
   $new = $temp;
   fibonacci($old, $new, $start, $end);
}
fibonacci(0, 1, 1, 5);