<?php
function calculate1(&$a) {
    $a++;
    echo "Inside calculate1: a = $a<br>";
}

function calculate2($b) {
    $b++;
    echo "Inside calculate2: b = $b<br>";
}

$a = 5; 
$b = 3;

calculate1($a);
echo "After calculate1: a = $a<br>";

calculate2($b);
echo "After calculate2: b = $b<br>";


/*
    Inside calculate1: a = 6
    After calculate1: a = 6
    Inside calculate2: b = 4
    After calculate2: b = 3

    calculate1(&$a) uses pass-by-reference, so the change inside the function affects $a in the main script.

    calculate2($b) uses pass-by-value, so the change inside the function does not affect $b outside.

*/
?>

