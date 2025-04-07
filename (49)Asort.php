WAP in php to demonstrate asort() an array in asscending order according to value
<br>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sorting PHP Associative Array in Asscending Order by value</title>
</head>
<body>
<?php

    // Define array
    $age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
     
    // Sorting array by value and print
    asort($age);
    print_r($age);

?>

<br>
echo "This Program is Written by Aaryan Khurana 0231BCA187";

</body>
</html>
