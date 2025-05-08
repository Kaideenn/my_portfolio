<?php

$first = 0;
$second = 1;

echo "Fibonacci series from 0 to 50:<br>";
echo $first . "<br>";

while ($second <= 50) {
    echo $second . "<br>";
    $next = $first + $second;
    $first = $second;
    $second = $next;
}
?>
