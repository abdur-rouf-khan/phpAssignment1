<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    
    $result = ($number1 > $number2) ? $number1 : $number2;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>
    
    <form method="POST" action="">
        <label for="number1">Number 1:</label>
        <input type="number" name="number1" required><br>
        
        <label for="number2">Number 2:</label>
        <input type="number" name="number2" required><br>
        
        <input type="submit" value="Compare">
    </form>
    
    <?php if (isset($result)) { ?>
        <h2>The larger number is: <?php echo $result; ?></h2>
    <?php } ?>
</body>
</html>