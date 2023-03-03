<?php

// $veryOld = 0;
// $oldValue = 1;
// $newValue = 1;

// for($i = 0; $i<10; $i++){
//     echo $veryOld." ";
//      $oldValue = $newValue;
//      $newValue = $veryOld + $oldValue;
//     $veryOld = $oldValue;
// }

$veryOld = 0;
$oldValue = 1;
$newValue = 1;
for($i = 0; $i<10; $i++){
    echo $veryOld." ";
    $oldValue = $newValue;
    $newValue = $oldvalue + $veryOld;
    $veryOld = $oldValue;
}