<?php
    $stu = array("Asanka" => 59 , "Gayan" => 86 , "Namal" => 47 , "Ruwan" => 68 , "Dinuka" => 23);
    foreach($stu as $key=>$value){
        if($value>50){
        echo "Name is ".$key. " have ".$value. " marks and PASS.<br>";

        }else{
          echo "Name is ".$key. " have ".$value. " marks and FAIL.<br>";  
        }
    }
?>