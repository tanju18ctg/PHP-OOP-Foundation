<?php 

class Animal{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo "{$this->name} is eating";
    }

    public function run()
    {
        echo "{$this->name} is  running";
    }

    public function sleep()
    {
        echo "{$this->name} is sleeping";
    }

    public function title($title)
    {
        $this->name = $title ." ".$this->name;
    }

    public function greet(){} // method override 
}

class Human extends Animal
{
    public function sayName(){
        echo "I am Tanju";
    }
    public function greet(){
        $this->title('Mrs');
        echo "Hi I am {$this->name} \n";
    }
}

class Cat extends Animal {
    public function greet(){
        echo "Meow \n";
    }
}

$rumo = new Human("Jannat");

//$rumo->sayName();

$cat1= new Cat("Tom");

$cat1->greet();

$rumo->greet();