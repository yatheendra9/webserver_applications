<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<h1>Simple Calculator</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNumber = $_POST["first_number"];
    $secondNumber = $_POST["second_number"];
    $operation = $_POST["operation"];
    $result = "";

    if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
        if ($operation == "addition") {
            $result = $firstNumber + $secondNumber;
        } elseif ($operation == "subtraction") {
            $result = $firstNumber - $secondNumber;
        } elseif ($operation == "multiplication") {
            $result = $firstNumber * $secondNumber;
        } elseif ($operation == "division") {
            if ($secondNumber != 0) {
                $result = $firstNumber / $secondNumber;
            } else {
                $result = "Error: Division by zero is not allowed.";
            }
        } else {
            $result = "Invalid operation selected.";
        }
    } else {
        $result = "Please enter valid numbers.";
    }

    echo "<p>Result: $result</p>";
}
?>

<form method="POST" action="">
    <label>Enter first number:</label>
    <input type="text" name="first_number">

    <label>Enter second number:</label>
    <input type="text" name="second_number">

    <label>Select operation:</label>
    <select name="operation">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select>

    <button type="submit">Calculate</button>
</form>

</body>
</html>
