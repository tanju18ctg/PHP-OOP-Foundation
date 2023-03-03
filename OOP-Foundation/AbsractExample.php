<?php 

abstract class Shape{

    abstract function getArea();

    abstract function baseArea();
}

class Rectangle extends Shape{

    protected $height, $base;

    public function __construct($height, $base)
    {
        $this->height = $height;
        $this->base = $base;
    }

    public function getArea(){
        return $this->base*$this->height;
    }

    function baseArea(){

    }

}

class Tringle extends Shape{
    protected $height, $base;
    public function getArea(){
        return $this->base*$this->height;
    }

    function baseArea(){

    }
}

$r1 = new Rectangle(8,5);
echo $r1->getArea();
$t1 = new Tringle(9,7);
//echo $t1->getArea();