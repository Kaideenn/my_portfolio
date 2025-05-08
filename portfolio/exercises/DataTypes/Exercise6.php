<?php
$expenses = [250, 100, 130, 500, 35, 21];
$totalAmount = 0;

foreach ($expenses as $expense) {
    $totalAmount += $expense;   
}

$amountOfExpenses = count ($expenses);

echo "My $amountOfExpenses", "\n";
echo "biggest expenses were: $totalAmount";

?>