<?php 

class MathCalculator{

    static $name;



    static function fibonacci($n)
    {
       echo "Fibonacci value is {$n} \n";
       echo Self::$name = "Tarekul Islam";
    }

    public function factorial($n)
    {
        echo "The factorial Value is {$n} \n";
        $this->fibonacci(55);
    }
    
}

 $mc = new MathCalculator();
 $mc->factorial(45);

MathCalculator::fibonacci(56);

// $mc->factorial(56);



