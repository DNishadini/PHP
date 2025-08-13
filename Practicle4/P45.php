<?php
// Function to find maximum of two numbers
function findMax($num1, $num2) {
    return ($num1 > $num2) ? $num1 : $num2;
}

// Function to find maximum in a series of numbers
function findMaxSeries($numbers) {
    $max = $numbers[0];
    foreach ($numbers as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
    return $max;
}

// Example usage
echo "Max of 10 and 25: " . findMax(10, 25) . "<br>";

$series = [4, 9, 2, 15, 7];
echo "Max in series: " . findMaxSeries($series);
?>
