<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Cannot divide by zero";
    }
    return $a / $b;
}

// Example usage
echo "Addition: " . add(10, 5) . "<br>";
echo "Subtraction: " . subtract(10, 5) . "<br>";
echo "Multiplication: " . multiply(10, 5) . "<br>";
echo "Division: " . divide(10, 5) . "<br>";
?>
