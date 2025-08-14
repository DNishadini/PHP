<?php
    $x = 5;
    $y = 10;

    function myfun(){
        global $x,$y;
        $y = $x + $y;
        echo "withing the function $y";
    }

    myfun();
    echo "Out of the function $y";

/*= $x + $y;

Adds $x (5) to $y (10) → $y becomes 15.

This change affects the global $y because of the global keyword.*/

?>