<?php
    echo date("l \, jS \of F Y ") . "<br>";
    echo date("l \, jS \of F Y h:i:s A") . "<br>";
    echo date("Y/m/d") . "<br>";

    /*l → Full day name (e.g., Tuesday).

    , → Printed as a literal comma. You escaped it with a backslash (\,) so PHP doesn’t confuse it with a format character.

    jS → Day of the month without leading zeros + English suffix (1st, 2nd, 3rd, 4th).

    \of → Outputs the word "of" literally. Backslash tells PHP “this is not a date format code”.

    F → Full month name (e.g., August).

    Y → Four-digit year (e.g., 2025).

    "<br>" → Adds a line break in <HTML></HTML>*/

    /*h → Hour (12-hour format, with leading zeros).

    i → Minutes (with leading zeros).

    s → Seconds (with leading zeros).

    A → Uppercase AM or PM.*/

    /*Y → Four-digit year (2025).

    / → Literal slash for formatting.

    m → Month (with leading zeros, 01–12).

    d → Day of month (with leading zeros, 01–31).*/

    echo "Difference between two dates<br>";

    $date1 = date_create("2013-03-15");
    $date2 = date_create("2013-12-12");

    $diff = date_diff($date1, $date2);

    // %R shows + or - sign, %a shows total days difference
    echo $diff->format("%R%a days");

    if ($date1 < $date2) {
        echo "<br>Hurry Up. Can Apply";
    }


    /*%R → Shows "+" if $date2 is after $date1, "-" if before.

    %a → Shows total number of days difference.*/

    ?>


