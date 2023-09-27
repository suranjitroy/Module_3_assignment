<?php

echo "<h1>Task 2: Array Manipulation</h1></br>";

function result($numbers){

    function removeeven($var){

        return $var%2 != 0;
    
    }
    
    $resultNumber = array_filter($numbers,'removeeven');
    
    foreach($resultNumber as $number){
        echo $number."<br/>";
    }

}
result([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);








?>