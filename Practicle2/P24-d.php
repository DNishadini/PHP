<?php
$num = 5; // You can change this value
$factorial = 1;
$i = 1;

do {
    $factorial *= $i;
    $i++;
} while ($i <= $num);

echo "Factorial of $num is: $factorial";
?>
