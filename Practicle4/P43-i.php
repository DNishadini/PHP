<?php
    function showName($fname){
        echo "Hello $fname<br>";
    }
    function addNumbers($a,$b) {
        $c=$a+$b;
        echo "a+b= ". $c;
    }
    showName("Nimal");
    addNumbers(10,45);
?>
