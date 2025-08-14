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
        <?php
           if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signupbtn'])){
	
                $title= htmlspecialchars($_POST['title']);
                $name = htmlspecialchars($_POST['name']);
                $dob = htmlspecialchars($_POST['dob']);
                $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : 'Not Specified';
                
	
                echo "<div class='form'>";
                echo "<h2>Entered Details</h2>";
                echo "<p><strong>Title:</strong> $title</p>";
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Date of Birth:</strong> $dob</p>";
                echo "<p><strong>Gender:</strong> $gender</p>";
                echo "</div><hr>";
                
    	
	}
        ?>
        <div class="border">
            
            <h2>Registration Form</h2>
            <h3><u>Registration Details</u></h3>
            <form method="post">
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
                        <input type="submit" value="Sign Up" name="signupbtn">
                        <input type="reset" value="Reset" name="resetbtn">
                    </div>
                    
                </div>
                
            </div>
            </form>
        </div>
    </body>
</html>