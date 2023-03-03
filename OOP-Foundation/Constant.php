<?php 

class Myclass{

    const NAME = "TAREKUL ISLAM TANJU";

   function sayHi()
   {
      echo "Hi from ".Self::NAME;
   }
}

$mc = new Myclass();

$mc->sayHi();
