<?php 

class A{

    static function sayHi(){
        echo "Hi form A";
    }
}


class B extends A{

    static function sayHi(){
        echo "Hi from B \n";
        Parent::sayHi();
    }
}

$b = new B();

$b->sayHi();