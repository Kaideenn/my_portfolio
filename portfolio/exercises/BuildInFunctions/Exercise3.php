<?php
function randNumber($min = 0, $max = 1){
    $float = $min + mt_rand() / mt_getrandmax() * ($max - $min);
    return $float;
}

echo "Random float:" .randNumber(50,500);
?>