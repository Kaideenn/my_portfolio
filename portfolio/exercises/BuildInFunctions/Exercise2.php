<?php

$birthdayMonth = 3;
$birthdayDay = 12;

$today = new DateTime();
$currentYear = $today->format('Y');


$birthday = new DateTime("$currentYear-$birthdayMonth-$birthdayDay");

if ($birthday < $today) {
    $birthday->modify('+1 year');
}

$interval = $today->diff($birthday);
$daysRemaining = $interval->days;

echo "Your birthday is in $daysRemaining days!";
?>
