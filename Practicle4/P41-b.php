<?php
$age = array("Peter" => "52", "Queen" => "37", "Joe" => "43");

// Sort by value (ascending)
asort($age);
print_r($age);

// Sort by key (ascending)
ksort($age);
print_r($age);


/*NOTE
    1.Sort by Values (Indexed Arrays)
    sort()	Sorts values in ascending order (index keys reset).
    rsort()	Sorts values in descending order (index keys reset).

    2.Sort by Values (Associative Arrays – Keep Keys)
    asort()	Sorts values in ascending order, keeps key association.
    arsort()	Sorts values in descending order, keeps key association.

    3.Sort by Keys
    ksort()	Sorts by keys in ascending order.
    krsort()	Sorts by keys in descending order.
*/
?>


