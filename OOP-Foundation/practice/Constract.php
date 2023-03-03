<?php 

class Human{

    public $name;
    public $age;

    function __construct($personName, $age=0)
    {
        $this->name = $personName;
        $this->age = $age;
    }

    function sayHi(){
        echo "Salam \n";
    }

    function sayName()
    {
        if($this->age != 0 && $this->age !=null){
            echo "My Name Is {$this->name} & I am {$this->age} years old \n";
        } else{
            echo "My Name Is {$this->name} & I don't now how old I am \n";
        }
    }


}

$human = new Human("Tarekul", 27);
$huma2 = new Human("Jannat Rumo");
$huma2->sayName();
$human->sayHi();
$human->sayName();

