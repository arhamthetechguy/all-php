<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>

<!-- <form method="post" action="">
    <label for="num1">Number 1:</label>
    <input type="text" name="num1" required>

    <label for="operator">Operator:</label>
    <select name="operator" id="operator" required>
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select>

    <label for="num2">Number 2:</label>
    <input type="text" name="num2" required>

    <input type="submit" value="Calculate">
</form> -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $num1 = $_POST["num1"];
//     $num2 = $_POST["num2"];
//     $operator = $_POST["operator"];

//     // Perform calculation based on the selected operator
//     switch ($operator) {
//         case "+":
//             $result = $num1 + $num2;
//             break;
//         case "-":
//             $result = $num1 - $num2;
//             break;
//         case "*":
//             $result = $num1 * $num2;
//             break;
//         case "/":
//             // Check for division by zero
//             if ($num2 != 0) {
//                 $result = $num1 / $num2;
//             } else {
//                 $result = "Cannot divide by zero";
//             }
//             break;
//         default:
//             $result = "Invalid operator";
//             break;
//     }

//     // Display the result
//     echo "<p>Result: $result</p>";
// }

// if(isset($country)){
//     echo $country;
// } else {
//     echo "No country";
// };
// echo "<br/>";
 
// echo $country ?? "Bangladesh";
$ghor = 6;
for ($i = 1; $i <= 10; $i++) {
    echo $ghor. " x ". $i . " = " . $ghor * $i. "<br/>";
}

for ($i = 1; $i <= 100; $i++) {
    if ($i === 42) {
        continue;
    }
    if ($i % 6 === 0) {
        echo $i.",";
    }
    if ($i === 66) {
        break;
    }
}



?>

</body>
</html>
