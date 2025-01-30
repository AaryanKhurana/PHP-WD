<?php

    function factiorial($num)
    {
        if($num == 0 || $num == 1)
        {
            return 1;
        }
        else 
        {
            return $num *factiorial($num -1); 
        }

    }

    $f = factiorial(5);
    echo "$f";
    echo"<br>";
    echo "Program by Aaryan Khurana 0231BCA187";

?>