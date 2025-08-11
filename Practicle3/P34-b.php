<?php
    $num = array(array(1,2,3),array(4,5,6),array(7,8,9));
    foreach($num as $col){
        foreach($col as $cell){
            echo $cell . " ";
        }
        echo "<br>";
    }
    echo "<br><br>";

    for($row=0;$row<3;$row++){
        for($col=0;$col<3;$col++){
            echo $num[$row][$col] . " ";
        }
        echo "<br>";
    }

?>

