<?php 


class Student{

   private $name, $age, $class;

   function __construct($name = '', $age = '', $class = '')
   {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
   }


   public function __get($prop)
   {
        return $this->$prop;
   }

   public function __set($prop, $value)
   {
        $this->$prop = $value;
   }


    // public function getName(){
    //     return $this->name;
    // }

    // public function setName($name){
    //     $this->name = $name;
    // }

    // public function getAge(){
    //     return $this->age;
    // }

    // public function setAge($age){
    //     $this->age = $age;
    // }

    // public function getClass()
    // {
    //     return $this->class;
    // }

    // public function setClass($class)
    // {
    //     $this->class = $class;
    // }

}

$S = new Student("Tarekul", 18, 12);

echo $S->name;
$S->age = 28;

echo $S->age;





