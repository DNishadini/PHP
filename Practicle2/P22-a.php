<html>
    <head></head>
    <body>
        <?php
            $op="*";
            $num1=10;
            $num2=5;

            switch($op){
                case "+":
                    $result = $num1 + $num2;
                    break;
                 case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Division by zero error!";
                    }
                     break;
                default:
                        $result = "Operator is not in the group (+, -, *, /)";
            }
            echo $result;
        ?>

    </body>

</html>