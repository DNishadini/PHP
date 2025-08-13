<?php
function powerOf($x, $y = 2) { // Default $y = 2 for square
    return pow($x, $y);
}

// Example usage
echo "2 to the power 3: " . powerOf(2, 3) . "<br>";
echo "5 squared (default power): " . powerOf(5) . "<br>";
?>
