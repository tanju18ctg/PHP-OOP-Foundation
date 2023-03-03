<?php 

class MotorCycle{
    private $parameters;

    function __construct($displacement, $capacity, $mileage)
    {
        $this->parameters = array();
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
      
    }

    // function getDisplacement()
    // {
    //     return $this->parameters['displacement'];
    // }

    // function setDisplacement($displacement)
    // {
    //     echo $this->parameters["displacement"] = $displacement;
    // }

    function __isset($name)
    {
        if(!isset($this->parameters[$name])){
            return false;
        }

        return true;

    }

    function __unset($name)
    {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }

    function __get($name)
    {
        echo $this->parameters[$name];
    }

    function __set($name, $value)
    {
         $this->parameters[$name] = $value;
    }

    
}

$bike = new MotorCycle("130cc", 30, 120);
$bike->displacement = "250cc";
echo $bike->displacement;

// if(isset($bike->displacement)){
//     echo "Found \n";
// }else {
//     echo "Not Found \n";
// }

unset($bike->capacity);



// echo $bike->getDisplacement();

// $bike->setDisplacement("140cc");
// $bike->getDisplacement();