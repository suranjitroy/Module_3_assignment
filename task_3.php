<?php

echo "<h1>Task 3: Array Sorting</h1> <br/>";

function sorting($grades){

    arsort($grades);

    foreach($grades as $sort){
        echo $sort."<br/>";
    }

}
sorting( [85, 92, 78, 88, 95] );



?>