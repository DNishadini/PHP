<?php
//condition ? value_if_true : value_if_false
/*Condition: $a > 45 → checks if 40 is greater than 45.
Result: false

If true: $b would get 20.

If false: $b gets 5.*/
$a = 40;
$b = $a > 45 ? 20 : 5;
echo "The value of b is $b";
?>
