<?php 

interface OnlyAnimal{
    public function sleeping();
    public function eating();
    public function working();
}


interface OnlyHuman extends OnlyAnimal{
    public function canSweem($param1, $param2);
} 

class Animal implements OnlyAnimal
{
    public function sleeping(){
        
    }
    public function eating(){
        
    }
    public function working(){
        
    }
}

class Human implements OnlyHuman
{
    public function sleeping()
    {
        
    }

    public function eating()
    {
        
    }

    public function working()
    {
        
    }

    public function canSweem($param1, $param2)
    {

    }

}