WAP in php to demonstrate sunrise() and sunset() time of Delhi
<br>
<!DOCTYPE html>
<html>
<body>

<?php

    // Calculate the sunrise and sunset time for New Delhi, India
    // Latitude: 38.4 North
    // Longitude: 9 West
    // Zenith ~= 90
    // Offset: +1 GMT 
    
    echo "New Delhi, India <br>";
    echo("Date: " . date("D M d Y"));
    echo("<br>Sunrise time: ");
    echo(date_sunrise(time(), SUNFUNCS_RET_STRING, 28.7041, 77.1025, 90.5, 5.5));
    echo("<br>Sunset time: ");
    echo(date_sunset(time(), SUNFUNCS_RET_STRING, 28.7041, 77.1025, 90.6, 5.5));

?>

<br>
echo "This Program is Written by Aaryan Khurana 0231BCA187";
</body>
</html>
