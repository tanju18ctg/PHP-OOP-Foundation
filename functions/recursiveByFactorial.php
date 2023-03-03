<?php 

function getFactorialValue($n)
{
    if($n <=1){
        return 1;
    }

return $n * getFactorialValue($n - 1);
}

echo getFactorialValue(4);
