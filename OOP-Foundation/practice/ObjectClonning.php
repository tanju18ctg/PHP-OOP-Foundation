<?php 

class Color{
    public $color;

    function __construct($color)
    {
        $this->color = $color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }
}


class MyColor{

    public $data, $color;

    function __construct($data, $color)
    {
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }

    function getData(){
        return $this->data;
    }

    function __clone(){
        $this->color = clone $this->color;
    }

}

$mc1 = new MyColor('Red', "blue");

$mc2 = clone $mc1;

//$mc1 =  $mc->addData("White");
$mc2->updateColor("yellow");
print_r($mc1);
print_r($mc2);