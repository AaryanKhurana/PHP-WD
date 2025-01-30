<?php

// Input numbers
$num1 = 56;
$num2 = 98;

// Calculate the HCF
while ($num2 != 0) {
    $remainder = $num1 % $num2;
    $num1 = $num2;
    $num2 = $remainder;
}

// Print the HCF
echo "The HCF of 56 and 98 is: " . $num1 . "<br>";
echo "Program by Aaryan Khurana 0231BCA187"

?>
