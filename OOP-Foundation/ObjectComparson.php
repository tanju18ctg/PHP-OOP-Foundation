<?php 

class Plannet{

    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

}

$p = new Plannet("Green");

$p2 = new Plannet("Green");

$p3 =  $p2;

if($p2=== $p3){
    echo "Smilar Object";
}else {
    echo "Not Similar";
}