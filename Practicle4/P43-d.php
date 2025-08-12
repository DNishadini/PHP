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
?>