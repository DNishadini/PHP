<!DOCTYPE html>
<html>
    <head>
        
        <style>
            .border{
                width:400px;
                border:2px solid black;
                padding:30px;
            }

            h2{
                text-align: center;
                background: pink;
            }
            .det{
                display: flex;
                gap:100px;
                
            }

        .bottom{
            text-align: right;
        }
        </style>
    </head>
    <body>
        
        <div class="border">
            
            <h2>Registration Form</h2>
            <h3><u>Registration Details</u></h3>
            <form action="form1.php" method="post">
            <div class="det">
               <div>
                    Title:<br><br>
                    Name:<br><br>
                    Gender:<br><br><br><br>
                    Date of Birth:<br><br>

               </div>
               <div>
                    <select name="title">
                        <option value="">Select Title</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Prof.">Prof.</option>

                    </select><br><br>
                    <input type="text" name="name"><br><br>
                    <input type="radio" name="gender" value="Male">Male<br>
                    <input type="radio" name="gender" value="Female">Female<br><br><br>
                    <input type="date" name="dob"><br><br><br>

                    <div class="bottom">
                        <input type="submit" value="Sign Up" name="sign">
                        <input type="reset" value="Reset" name="resetbtn">
                    </div>
                    
                </div>
                
            </div>
            </form>
        </div>
    </body>
</html>