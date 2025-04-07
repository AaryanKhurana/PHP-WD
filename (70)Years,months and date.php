WAP in php to calculate number of years,months and days of your age with html
<br>
<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <h2>Age Calculator</h2>
    <form method="post">
        <label for="birthdate">Enter your birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <input type="submit" value="Calculate Age">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["birthdate"])) {
        $birthdate = new DateTime($_POST["birthdate"]);
        $currentDate = new DateTime();
        $age = $birthdate->diff($currentDate);

        echo "<h3>Your Age: " . $age->y . " years, " . $age->m . " months, and " . $age->d . " days.</h3>";
    }
    ?>

<br>
echo "This Program is Written by Aaryan Khurana 0231BCA187";
</body>
</html>