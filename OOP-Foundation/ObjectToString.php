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

    function __toString()
    {
        echo "My color is {$this->color}";
    }
}



$c = new Color("Red");

echo $c;