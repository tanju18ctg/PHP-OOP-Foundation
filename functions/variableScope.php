<?php 

// $name = "Tarekul"; // global scope 

// function doTest(){
//     global $name;
//     echo $name;
// }

// doTest();

// function doTry(){
//     $name = "Tarekul Islam"; // local scope
//     echo $name;
// }

// doTry();


function doSomething()
{
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i." ";
}

doSomething();
doSomething();
doSomething();
doSomething();

?>

