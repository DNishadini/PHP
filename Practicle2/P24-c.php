<?php
$i = 25;
$sum=0;
while ($i <= 65) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
        $sum += $i;
    }
    $i++; // move this outside the if
}
echo "Sum of even numbers: " . $sum;
?>
