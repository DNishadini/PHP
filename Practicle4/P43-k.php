<?php
    function dispaly($number){
        if($number<=5){
            echo "$number<br>";
            dispaly($number+1);
        }
    }

    dispaly(1);