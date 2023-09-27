<?php

echo "<h1>Task 4: Multidimensional Array</h1> <br/>";

$studentGrades = [

    "Rahim"  => [
        "Math"    => 55,
        "English" => 40,
        "Science" => 72,
    ],

    "Karim"  => [
        "Math"    => 65,
        "English" => 57,
        "Science" => 72,
    ],

    "Jashim" => [
        "Math"    => 85,
        "English" => 90,
        "Science" => 48,
    ]

];

foreach ( $studentGrades as $key => $values ) {

    echo "<h2>Student Name : {$key} </h2>" . "<br/>";

    foreach ( $values as $key => $value ) {

        $sum = array_sum( $values );

        $avg_mark = array_sum( $values )/count($values);

        echo $key . " : " . $value . "<br/>";

    }

    echo "Total : " . $sum . "<br/>";

    echo "Average  : " .number_format($avg_mark,2). "<br/>";

    if($avg_mark >= 50 && $avg_mark <= 59){
        echo "<p style='font-weight:bold;'>Grade : B </p><br/>";
    }elseif($avg_mark >= 60 && $avg_mark <= 69){
        echo "<p style='font-weight:bold;'>Grade : A- </p><br/>";
    }elseif($avg_mark >= 70 && $avg_mark <= 79){
        echo "<p style='font-weight:bold;'>Grade : A+ </p><br/>";
    }
    else{
        echo "Grade Not Found";
    }
 

}

?>