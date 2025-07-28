<html>
    <head></head>
    <body>
        <?php
            $hours = readline("Enter number of working hours: ");
            $rate = readline("Enter amount per hour: ");
            $salary = $hours * $rate;

            if ($salary > 15000) {
                $salary = $salary - ($salary * 0.05); 
            }

            echo "Final Salary: Rs. " . $salary;

        ?>
    </body>
</html>