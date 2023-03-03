<?php 

    class Shape{

        protected $name, $area;

        public function __construct($name)
        {
            $this->name = $name;
            $this->calculatArea();
        }

        public function getArea(){
            echo "{$this->name} area is {$this->area} \n";
        }


        public function calculatArea(){}

    }

    class Tringle extends Shape{
        private $a, $b, $c;

        public function __construct($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
            Parent::__construct("Tringle");
        }

        public function calculatArea(){
            $parameter = ($this->a + $this->b + $this->c)/2;
            $this->area = sqrt($parameter * ($parameter - $this->a) * ($parameter - $this->b) * ($parameter - $this->c));
        }
    }

    class Rectangle extends Shape{
        private $a, $b;

        public function __construct($a, $b)
        {
            $this->a = $a;
            $this->b = $b;
            Parent::__construct("Rectangle");
        }

        public function calculatArea(){
            $this->area = $this->a * $this->b;
        }

    }

    $tr1 = new Tringle(5,6,7);
    $tr1->getArea();

    $r1 = new Rectangle(7,9);
    $r1->getArea();