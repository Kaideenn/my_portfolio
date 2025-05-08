<?php
$score = 43;

if($score >= 90 && $score <= 100){
    echo "A = You Passed The Exam";
}elseif($score >= 80 && $score <= 89){
    echo "B = You Passed The Exam";
}elseif($score >= 70 && $score <= 79){
    echo "C = You Passed The Exam";
}elseif($score >= 60 && $score <= 69){
    echo "D = You Passed The Exam";
}elseif($score >= 1 && $score <= 59){
    echo "F = You Failed The Exam";
}else{
    echo "Invalid Score";
}
?>
