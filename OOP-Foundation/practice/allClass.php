<?php 


class Human{

    function sayHi()
    {
        $this->saySalam();
        echo "Hello \n";
    }


    function saySalam(){
        echo "Salam \n";
    }
}

class Animal{

    function sayHi()
    {
        echo "Meao \n";
    }
}

$h1 = new Human();
$h1->sayHi();

$a = new Animal();
$a->sayHi();
