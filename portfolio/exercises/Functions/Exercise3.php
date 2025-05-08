<?php

$num1 = 20;
$num2 = 5;


function addNumbers($a, $b) {
    return $a + $b;
}
function subtractNumbers($a, $b) {
    return $a - $b;
}
function multiplyNumbers($a, $b) {
    return $a * $b;
}
function divideNumbers($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "undefined (division by zero)";
    }
}
echo "Addition of $num1 and $num2 is " . addNumbers($num1, $num2) . "<br>";
echo "Subtraction of $num1 and $num2 is " . subtractNumbers($num1, $num2) . "<br>";
echo "Multiplicity of $num1 and $num2 is " . multiplyNumbers($num1, $num2) . "<br>";
echo "Division of $num1 and $num2 is " . divideNumbers($num1, $num2) . "<br>";
?>
