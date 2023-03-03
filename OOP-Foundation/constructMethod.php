<?php 

class Human{

    public $name;
    public $age;

    function __construct($personName, $personAge = 0)
    {
       $this->name = $personName;
       $this->age = $personAge;
    }

    function sayHi()
    {
        echo "Salam \n";
        $this->sayName();
    }

   function sayName()
   {
        if($this->age){
            echo "My Name is {$this->name}. I am {$this->age} years Old";
        } else{
            echo "My Name is {$this->name}. I don't know how old I am";
        }
   }

}

$h1 = new Human("Tarekul", 30);
$h2 = new Human("Rumo");
$h1->sayHi();
$h2->sayHi();

