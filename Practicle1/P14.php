<html>
    <head>

    </head>
    <body>
       <?php
        
           /* $var1 = 12;
            $var2 = 2.5;
            $var3 = "13";
            $var4 = "5.67";
            $txt = "php";
            $txt1 = "server side";

            echo "$var1";
            echo '$var1';
            echo "<br>";

            $var5 = $var1 + $var2;
            echo $var5;
            echo "<br>";

            $var6 = $var1 + $var3;
            echo $var6;
            echo "<br>";

            $var7 = $var1 + $txt;
            echo $var7;
            echo "<br>";

            $var8 = $txt + $txt1;
            echo $var8;
            echo "<br>";

            $txt .= "bb";
            echo $txt;
            echo "<br><br><br>"*/

            //updated code

                        
            $var1 = 12;
            $var2 = 2.5;
            $var3 = "13";
            $var4 = "5.67";
            $txt = "php";
            $txt1 = "server side";

            echo "$var1<br>";
            echo '$var1<br>';

            $var5 = $var1 + $var2;
            echo $var5 . "<br>";

            $var6 = $var1 + $var3;
            echo $var6 . "<br>";

            // Safe version of var7
            if (is_numeric($txt)) {
                $var7 = $var1 + $txt;
            } else {
                $var7 = $var1 + 0;
            }
            echo $var7 . "<br>";

            // This will also throw an error in PHP 8+ if not handled
            if (is_numeric($txt) && is_numeric($txt1)) {
               // $var8 = $txt + $txt1;
               $var8 = $txt . $txt1;

            } else {
                $var8 = 0;
            }
            echo $var8 . "<br>";

            $txt .= "bb";
            echo $txt



        ?>
 
    </body>
</html>