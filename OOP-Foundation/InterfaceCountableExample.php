<?php 

class DistricsCollection implements IteratorAggregate, Countable  {

    private $allDistricts;

    function __construct()
    {
        
        $this->allDistricts = array();
    }

    function addDistrict($district) 
    {
        array_push($this->allDistricts, $district);
    }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->allDistricts);
    }

    function count() :int
    {
        return count($this->allDistricts);
    }

    
}


$districts = new DistricsCollection;

$districts->addDistrict('Chittagong');
$districts->addDistrict('Dhaka');
$districts->addDistrict('Comilla');
$districts->addDistrict('Barishal');
$districts->addDistrict('Comilla');
$districts->addDistrict('Barishal');





//$districts = $district->getDistricts();

foreach($districts as $district)
{
    echo $district."\n";
}

echo count($districts);
