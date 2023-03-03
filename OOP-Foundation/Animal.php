<?php 

class Human{

    public $name;
    function sayHi(){
        echo "Salam";
        $this->sayName();
    }

    function sayName(){
        echo "My Name is {$this->name}";
    }
}

class Cat{

    function sayHi(){
        echo "Mewo";
    }
}


$h1 = new Human();
$h1->name = "Tarekul Islam \n";
$h1->sayHi();

$c1 = new Cat();
$c1->sayHi();