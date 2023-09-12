<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1" placeholder="Enter first number" required><br><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br><br>
        <select name="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'addition':
                $result = $num1 + $num2;
                break;

            case 'subtraction':
                $result = $num1 - $num2;
                break;

            case 'multiplication':
                $result = $num1 * $num2;
                break;

            case 'division':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;

            default:
                $result = "Invalid operation";
                break;
        }

        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>