<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Display submitted details
    echo "<h2>Registration Details</h2>";
    echo "Name: " . $_POST['name'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Registration No: " . $_POST['regno'] . "<br>";
    echo "Gender: " . $_POST['gender'] . "<br><br>";
} else {
    // Display the form
?>
    <h2>Registration Form</h2>
    <h3>Alumni Association – Faculty of Science</h3>

    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Registration No: <input type="text" name="regno" placeholder="SC/xxxx/xxxx"><br><br>
        
        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>
        
        <input type="submit" value="Register">
    </form>
<?php
}
?>

</body>
</html>
