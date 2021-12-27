<?php

echo "Home work for multi dimentional Array<br>";

$multiDim=array(array(3,4,5,6),
                array(1,2,3,4),
                array(2,4,6,8),
                array(3,5,7,9),
                array(4,6,8,9));
for ($i=0; $i <count($multiDim) ; $i++) { 
    for ($j=0; $j <count($multiDim[$i]) ; $j++) {  
            echo $multiDim[$i][$j];
            echo " ";
    }
    echo "<br>";
}

?>