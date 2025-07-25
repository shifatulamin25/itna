<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to My PHP Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome to My Website</h1>

    <?php
        // Set timezone and get current time
        date_default_timezone_set("Asia/Kolkata");
        $currentTime = date("h:i A");
        $currentDate = date("d M Y");
        echo "<p>Today is <strong>$currentDate</strong> and the time is <strong>$currentTime</strong>.</p>";

        // Display greeting based on time
        $hour = date("H");
        if ($hour < 12) {
            echo "<p>Good morning!</p>";
        } elseif ($hour < 18) {
            echo "<p>Good afternoon!</p>";
        } else {
            echo "<p>Good evening!</p>";
        }
    ?>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
    </footer>

</body>
</html>
