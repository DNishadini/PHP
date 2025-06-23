<?php
    $str = "Hello & Welcome to Simplilearn";
    $num = 5;
    $float = 7.6;

    echo "<h1>" .$str. "<h1>";
    echo "<h2>" .$num. "<h2>";
    echo "<h3>" .$float. "<h3>";

    $laptop_brand = array("HP","Lenovo","Asus","Dell");
    var_dump($laptop_brand);
    //output
    //array(4) { [0]=> string(2) "HP" [1]=> string(6) "Lenovo" [2]=> string(4) "Asus" [3]=> string(4) "Dell" }
    echo var_dump($laptop_brand[1]);
?>