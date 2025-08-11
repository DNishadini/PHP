<?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    // Method 1: Directly access indexes
    print $days[0] . " " . $days[1] . " " . $days[2] . " " . $days[3] . " " . $days[4] . " " . $days[5] . " " . $days[6];
    echo "<br><br>";


    // Method 2: Using for loop
    $arrlength = count($days);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $days[$x] . "<br>";
    }
    echo "<br>";
    
    // Method 3: Using foreach loop
    foreach ($days as $day) {
        echo $day . "<br>";
    }
    
    

?>