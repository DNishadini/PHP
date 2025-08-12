<!DOCTYPE html>
<html>
    <head>
        <title>Vacancy in ABC Company</title>
        <style>
            .message{
                color : red;
                font-weight : bold;
            }
            .box{
                width:400px;
                border:1px solid black;
                padding:15px;
                font-family: Arial, Helvetica, sans-serif;
            }

            h3{
                text-align: center;
            }

        </style>
    </head>
    <body>
        <div class="box">
            <h3>Vacancy in ABC Company</h3>
            <p>Data Entry Operator(Closing Date:2021-03-15)</p>
            <strong>Requirements:</strong>
            <ul>
                <li>Above 18 years</li>
                <li>Computer Literacy</li>
                <li>Fluent in Sinhala and English</li>
            </ul>
            <?php
                $closingDate = date_create("2025-08-20");
                $today = date_create(date("Y-m-d"));

                if($today <= $closingDate){
                    echo "<p class= 'message'>[APPLY IMMEDIATELY]</p>";
                }else{
                    echo "<p class = 'message'>[Vacancy Closed]</p>";
                }
            ?>
        </div>
    </body>
</html>