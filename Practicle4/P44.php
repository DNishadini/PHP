<!DOCTYPE html>
<html>
    <head>
        <style>
            .border{
                width: 400px;
                border: 2px solid black;
                font-family: Arial;
                padding: 10px;
                
            }
            .address{
                text-align: right;
            }
        </style>

    </head>

    <body>
        <?php
            function stuName($name){
                echo "Dear Mr.$name,<br><br>";
            }

            function regiDetails($designation){
                echo "$designation<br>University of Ruhuna<br>Mathara";

            }
            ?>
        
        <div class=border>
            <div class=address>
                <?php
                regiDetails("Registar");
                ?>
            </div>
            <div>
                <h2 style="text-align: center">Student Registration</h2>
            </div>
            <div style="color: red">
                <?php
                    stuName("Janitha Dilsham");
                ?>
            </div>
            <div>
               <p> We are happy to inform you that you are selected to the 
      <b>Computer Awareness Course.</b><br><br>Thank you</p>
            </div>
            <div class=address>
                <?php
                    regiDetails("Registar");
                ?>
            </div>
        </div>
        
    </body>

</html>