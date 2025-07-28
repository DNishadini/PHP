<html>
    <head></head>
    <body>
        <?php
            $marks=67;
            if($marks>50){
                echo "PASS<br>";
            }else{
                echo "FAIL<br>";
            }

            if ($marks >= 75) {
                echo "Grade: A";
            } elseif ($marks >= 65) {
                echo "Grade: B";
            } elseif ($marks >= 55) {
                echo "Grade: C";
            } elseif ($marks >= 35) {
                echo "Grade: S";
            } else {
                echo "Grade: F";
            }

        ?>
    </body>
</html>