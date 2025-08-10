<?php
$salary = 40000;
$living_cost = 20000;

$months_expenses = [
    "January" => 2000,
    "February" => 3500,
    "March" => 4000,
    "April" => 5000,
    "May" => 1000,
    "June" => 50
];

echo "Month\tRemaining Balance<br>";

foreach ($months_expenses as $month => $expense) {
    $remaining = $salary - $living_cost - $expense;
    echo "$month\tRs. $remaining<br>";
}
?>
