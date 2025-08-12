<?php
// Add 7 days to 2011-02-12
$date1 = date_create("2011-02-12");
date_modify($date1, "+7 days");
echo "Add 7 days to 2011-02-12: " . date_format($date1, "Y-m-d") . "<br>";

// Add 3 months to 2022-07-30
$date2 = date_create("2022-07-30");
date_modify($date2, "+3 months");
echo "Add 3 months to 2022-07-30: " . date_format($date2, "Y-m-d") . "<br>";
?>
