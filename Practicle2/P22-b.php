<?php
$item = "Fish bun";  // Change to "Vegetable bun", "Fish bun", "Hamburg"

switch ($item) {
    case "Vegetable bun":
        $price = 75;
        break;
    case "Fish bun":
        $price = 85;
        break;
    case "Hamburg":
        $price = 100;
        break;
    default:
        $price = "Item not found";
}

echo "You should pay: " . $price;
?>
