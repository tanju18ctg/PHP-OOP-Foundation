<?php


// for loop//

// for($i = 1; $i<10; $i++){
//    echo $i;
//     echo PHP_EOL;
//     for($j = 0; $j<$i; $j++){
//         echo "*";
//         echo PHP_EOL;
//     }
// }

// WHILE LOOP//

// // $i = 0;
// // while($i<10){
// //     $i++;
// //     echo $i;
// //     echo PHP_EOL;
// // }

// // Do While//
// $i = 5;

// do{
//     $i+=2;
//     echo $i;
// }while($i<15);



//Multiple steping //

// for($i = 20, $j=0; $i>0; $i-=1, $j+=1){
//         // echo $i.":".$j;
//         echo $i.":".(21-$i);
//         echo PHP_EOL;
// }


// for(initialie value; condition; increement/decreement){
//     echo variable;

// }

// for($m = 1; $m<40 ;  $m+=1){
//     echo $m;
//     echo PHP_EOL;
// }
// echo '<br/>';
// for($i = 10; $i>0 ; $i--){
//     echo $i;
//     echo PHP_EOL;
// }


// for($i = 10, $j= 0; $i>0; $i-=1, $j++){
//     echo $i.":".$j;
//     echo PHP_EOL;
// }



// Multiplse step looping//
// for($i = 20, $j=0; $i>0; $i-=1, $j+=1){
//         // echo $i.":".$j;
//         echo $i.":".(21-$i);
//         echo PHP_EOL;
// }


// Find out Factorial Value to any digit//


$n = 7;

for($i = $n, $factorial = 1; $i>1; $i--){
  $factorial = $factorial * $i;
}

echo "the factionrial number {$n} is {$factorial}";