<?php
class OurClass{

   Final public function doSomething(){
        echo "I am doing somthing";
    }
}


class MyClass extends OurClass
{
    public function doSomething(){
        echo "I am doing Nothing";
    }
}


$mc = new MyClass();
$mc->doSomething();
