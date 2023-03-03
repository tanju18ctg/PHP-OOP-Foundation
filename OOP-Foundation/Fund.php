<?php 

class Fund{

    private $fund;
    function __construct($innitialFund = 0)
    {
        $this->fund = $innitialFund;
    }

    function addFund($money){
        $this->fund += $money;
        $this->deductionFund(40);
    }

    private function deductionFund($money){
        $this->fund -= $money;
    }

    function getTotal(){
        echo "Your total money is {$this->fund} \n";
    }
    
}

$fund = new Fund();
$fund->addFund(100);
// $fund->fund = 30;
$fund->getTotal();

//$fund->deductionFund(30);
$fund->getTotal();
