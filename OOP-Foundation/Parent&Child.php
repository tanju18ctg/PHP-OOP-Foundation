<?php 

class ParentP{
protected $name;

public function __construct($name)
{
    $this->name = $name;
    $this->sayHi();
   
}
    public function sayHi()
    {
        echo "Hi from {$this->name}\n";
    }
}


class ChildC extends ParentP{
  
    public function sayHi(){
        Parent::sayHi();
        echo "Hellow Every One from {$this->name} \n";
    }

}

$childC = new ChildC("Tarekul");



