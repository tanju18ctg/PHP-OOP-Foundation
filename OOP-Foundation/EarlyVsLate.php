<?php 

class Plannet {

    // static function sayName(){
    //     Self::getName(); // Early Binding
    // }

    static function sayName(){
        Static::getName(); // Late Binding
    }


    static function getName(){
        echo  "Plannet";
    }
}

class Earth extends Plannet{

    static function getName(){
        echo "Earth";
    }
}

 //Plannet::sayName();

 Earth::sayName();
