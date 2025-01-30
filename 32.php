<?php

$number = 153;
$sum = 0;
$temp = $number;
$numDigits = strlen((string)$number);

while ($temp > 0) {
    $digit = $temp % 10;
    $sum += $digit ** $numDigits;  // Using exponentiation operator to calculate power
    $temp = (int)($temp / 10);
}

if ($sum === $number) {
    echo "$number is an Armstrong number.<br>";
} else {
    echo "$number is not an Armstrong number.<br>";
}

echo "Program by Aaryan Khurana 0231BCA187"

?> 
