<?php
    $fn="rice";
    $cat="vegetable";
    
    switch(strtolower($fn)){
        case "rice":
            switch(strtolower($cat)){
                case "chicken":
                    $price=500;
                    break;
                case "vegetable":
                    $price=300;
                    break;
                default:
                    echo "Invalid";
            }
            break;
        case "bun":
           switch(strtolower($cat)){
                case "egg":
                    $price = 150;
                    break;
                case "fish":
                    $price = 80;
                    break;
                default:
                    echo "Category not found for bun";
           }
           break; 

    }
    echo "Price for $cat $fn is $price";
?>