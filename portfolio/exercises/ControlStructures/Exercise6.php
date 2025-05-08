<?php

$number = 7;
$start = 1;
$end = 10;

echo "Multiplication Table of $number from $start to $end:<br>";
for ($i = $start; $i <= $end; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result<br>";
}
?>
