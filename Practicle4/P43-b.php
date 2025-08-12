<?php
    //x global scope
  /*  $x = 5;

    function myTest(){
        echo "<br> x within the function" .$x;
    }
    myTest();

    echo "<br> x out of the function" . $x;*/

    //the above code incorrect.below code is the corrected one.


?>




<?php
    $x = 5;

    function myTest() {
        global $x; // make $x accessible inside the function
        echo "<br> x within the function: " . $x;
    }

    myTest();

    echo "<br> x out of the function: " . $x;
?>
