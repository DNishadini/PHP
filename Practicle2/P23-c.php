<?php
$price_per_unit = 1000;

echo "Quantity  Price(Rs)<br/>";

for ($quantity = 10; $quantity <= 50; $quantity += 10) {
    $total_price = $price_per_unit * $quantity;
    echo "$quantity  $total_price<br/>";
}
?>
