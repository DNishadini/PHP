<?php
    function addFunction($num1,$num2){
        $num = $num1 + $num2;
        return $num;
    }

    //method 1 call the finction

    $return_value = addFunction(10,20);
    echo "Returned the value from the function: $return_value<br>";

    ////method2 call the function
    echo "Returned value from the function: ".addfunction(10,20)."<br>"
?>