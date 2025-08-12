<?php
$arr = array("a" => "one", "b" => "two", "c" => "three");

// Extract array keys as variable names
extract($arr);

echo $a; // one
echo "\n";
echo $b; // two
echo "\n";
echo $c; // three
?>
