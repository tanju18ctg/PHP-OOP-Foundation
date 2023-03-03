<?php 

class RGB{

    private $color;
    private $red, $green, $blue;

    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, '#');
        $this->convertColorCode();
    }


    public function colorSet($colorCode){
        $this->color = ltrim($colorCode,'#');
    }

    public function readRGBColor(){
        echo "Red={$this->red} \n Green={$this->green}\n Blue={$this->blue}";
    }

    public function getRed(){
        return $this->red;
    }

    public function getGreen(){
        return $this->green;
    }

    public function getBlue(){
        return $this->blue;
    }

    public function colorGet()
    {
        return $this->color;
    }

     private function convertColorCode()
    {
        if($this->color != '' && $this->color != null){
            list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x%02x%02x");
        }else {
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        }
       
    }

}

//new object

$color = new RGB("#ff8978");
echo $color->getRed();

