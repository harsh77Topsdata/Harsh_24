<?php 
    //Pattern 
    echo "<h1><center>Pattern</center></h1><hr><br>";

    $a=5;

    for($i=1;$i<=$a;$i++)
    {
        if($i==1 or $i==$a)
        {
           for($j=1;$j<=5;$j++)
           {
            echo "*";
           }
        }
        else
        {
            echo "*";
        }
        echo "<br>";
    }
?>