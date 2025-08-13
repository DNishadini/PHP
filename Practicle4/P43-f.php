<?php
    $x=5;
    $y=10;
    $a=34;

    function myTest(){
        echo "a within the function<br>" .$a;
        $b=65;
        echo "b within the function".$b;
        global $x,$y;
        echo "<br> x within the function" .$x;
    }
    myTest();

    echo "<br>a outside the function".$a;
    echo "<br>b outside the function".$b;
    echo "<br>x outside the function".$x;

?>