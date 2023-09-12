<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd Checker</title>
</head>
<body>
    <h1>Even/Odd Checker</h1>

    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>

        <button type="submit">Check</button>
    </form>

    <?php
        if(isset($_POST['number'])) {
            $number = $_POST['number'];

            if($number % 2 == 0) {
                echo "<p>The number $number is even.</p>";
            } else {
                echo "<p>The number $number is odd.</p>";
            }
        }
    ?>
</body>
</html>