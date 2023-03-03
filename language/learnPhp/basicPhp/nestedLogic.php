<?php

$condition1 = true;
$condition2 = true;
$condition3 = true;

if($condition1){
    if($condition2){
        if($condition3){
            echo "I love Mohammad";
        }else {
            echo "No 1";
        }
    }else {
        echo "NO 2";
    }
}else {
    echo "NO 3";
}



echo "<br />";

if($condition1 && $condition2 && $condition3){
    echo " I love Mohammed ";
}elseif($condition1 && $condition2){
    echo "NO 1";
}elseif($condition1){
    echo " NO 2";
}else {
    echo "No 3";
}
