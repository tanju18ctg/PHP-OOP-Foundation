<?php 

class A {

   protected static $name;
    static public function sayHi ()
    {
        Self::$name = "Tarkeul";
        echo "Hello from A";
    } 
}

class B extends A
{
   static public function sayHi()
   {
        Self::$name = "Tanju";
        Parent::sayHi();
    }

}

$b = new B();
$b->sayHi();
