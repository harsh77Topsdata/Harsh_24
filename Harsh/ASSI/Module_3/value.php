<?php 
    $a=1;
    $b=&$a;
    $b="2$b";
    echo $a."<br>";
    echo $b;

    echo "<h4>In first line we assign value 1 to a <br> 
        In second Line we give refernce of a to b so if we change the value of a value changed automatically <br>
        In Third we add 2 in the value of b, so output of b is 21 and we passed refernce of a in the b so value of a also changed and output of a is 21. </h4>";
?>