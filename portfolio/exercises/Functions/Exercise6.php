<?php
function isPrime($num1) {
    if ($num1 <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num1); $i++) {
        if ($num1 % $i == 0) {
            return false;
        }
    }
    return true;
}

$num1 = 11;

if (isPrime($num1)) {
    echo "$num1 is a prime number.";
} else {
    echo "$num1 is not a prime number.";
}

?>
