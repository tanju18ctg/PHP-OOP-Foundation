<?php 


interface BaseAnimal{

    public function isAlibe();

    function canEat($parm1, $parm2);

    function sleep();

}

class BaseHuman implements BaseAnimal{

    public function isAlibe(){
        echo "Something";
    }

    function canEat($parm1, $parm2){

    }

    function sleep(){

    }
}

$bh = new BaseHuman();
echo $bh instanceof BaseAnimal;