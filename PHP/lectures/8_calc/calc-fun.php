<?php

    function add($x, $y){
        return $x + $y;
    }

    function sub($x, $y){
        return $x - $y;
    }

    function mul($x, $y){
        return $x * $y;
    }

    function div($x, $y){
        return $y == 0 ? "Do not divide by zero!!!" : $x / $y; 
    }
    
?>