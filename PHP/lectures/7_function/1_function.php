<?php
    function float($x): float{
        return $x;
    }
    
    echo float(10); // 10
    echo float(10.5); // 10

    function sum1(int $x, float $y){
        return $x + $y;
    }

    echo sum1(2, 3); // 5
    echo sum1(2.5 , 3); // 5
    echo sum1(2.5, 3.5); // 5.5