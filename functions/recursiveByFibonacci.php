<?php  

   
function fibonnaci($old, $new, $start, $end){
    
    if($start > $end){
        return;
    } 
    $start++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonnaci($old, $new, $start, $end);

}

fibonnaci(0,1,5,15);