<?php

class Unknown{

}

class Shapes{

    private $shapes;
    function __construct()
    {
        $this->shapes = array();
    }

    public function addShap(Unknown $shape){
        array_push($this->shapes, $shape);
    }


    public function totalShapes(){
        return count($this->shapes);
    }
}

class Tringle extends Unknown{

}


class Rectangle extends Unknown{

}

class Student{

}

$myShapes = new Shapes();

$myShapes->addShap( new Rectangle());
$myShapes->addShap(new Tringle());
// $shapes->addShap(new Student());

echo $myShapes->totalShapes();