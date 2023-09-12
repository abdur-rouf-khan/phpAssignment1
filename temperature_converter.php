<?php

function convertTemperature($temperature, $conversion) {
    if ($conversion === "Celsius to Fahrenheit") {
        return ($temperature * 9/5) + 32;
    } else if ($conversion === "Fahrenheit to Celsius") {
        return ($temperature - 32) * 5/9;
    } else {
        return "Invalid conversion";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $temperature = $_POST['temperature'];
    $conversion = $_POST['conversion'];

    $convertedTemperature = convertTemperature($temperature, $conversion);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <form method="post" action="">
        <label for="temperature">Temperature:</label>
        <input type="number" id="temperature" name="temperature" required>

        <label for="conversion">Conversion:</label>
        <select id="conversion" name="conversion" required>
            <option value="Celsius to Fahrenheit">Celsius to Fahrenheit</option>
            <option value="Fahrenheit to Celsius">Fahrenheit to Celsius</option>
        </select>

        <button type="submit">Convert</button>
    </form>

    <?php if(isset($convertedTemperature)): ?>
        <p>Converted Temperature: <?php echo $convertedTemperature; ?></p>
    <?php endif; ?>
</body>
</html>