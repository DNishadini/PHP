<?php
function myTest() {
    static $x = 0; // static variable
    $y = 0;        // normal local variable

    echo "x and y: " . $x . " " . $y . "<br>";

    $x++;
    $y++;
}

myTest();
myTest();
myTest();

/* 
x and y: 0 0
x and y: 1 0
x and y: 2 0

Static variable → remembers value between calls.

Local variable → resets each time.*/

?>