
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="score1">Test Score 1:</label>
    <input type="text" name="score1" id="score1"><br>
    
    <label for="score2">Test Score 2:</label>
    <input type="text" name="score2" id="score2"><br>
    
    <label for="score3">Test Score 3:</label>
    <input type="text" name="score3" id="score3"><br>
    
    <input type="submit" value="Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"];
    
    $average = ($score1 + $score2 + $score3) / 3;
    
    $grade = "";
    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    
    echo "Average: " . $average . "<br>";
    echo "Grade: " . $grade;
}
?>

