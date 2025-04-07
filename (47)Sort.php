WAP in php to demonstrate sort() an array in asscending order 
<br>
<!DOCTYPE html>
<html>
<body>

<?php

    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    
    $clength = count($cars);
    for($x = 0; $x < $clength; $x++){
        echo $cars[$x] . 
        "<br>";
    }
   ?>

echo "This Program is Written by Aaryan Khurana 0231BCA187";

</body>
</html>