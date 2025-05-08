<?php
$text = "SANA MAKAPASA KAMI LAHAT!";

function searchText($punctuation, $str){
    $search = substr_count($str, $punctuation);
    echo "The text has $search punctuation";
}
searchText("!", $text);
?>