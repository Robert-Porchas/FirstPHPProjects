<?php
// This file contains the function to perform calculations based on user input from a form.
function myCalculator($num1, $num2, $operator) {
    $sum;
    switch($operator){
        case "add":
            $sum = $num1 + $num2;
            break;
        case "subtract":
            $sum = $num1 - $num2;
            break;
        case "multiply":
            $sum = $num1 * $num2;
            break;
        case "divide":
            if($num2 == 0){ return "Error: Division by zero";}
            $sum = $num1 / $num2;
            break;
        default:
            return "There was an error with your input";
            break;
    }
    return $sum;
}

$num1 = $_GET['num01'];
$num2 = $_GET['num02'];
$operator = $_GET['operation'];

echo "Value :" . myCalculator($num1, $num2, $operator);
// The above code retrieves the numbers and operator from the GET request and calls the myCalculator function to perform the calculation.
// It then echoes the result of the calculation.
?>