<?php

echo "<h1>Task 1: String Manipulation</h1><br/>";

function textChange( $text ) {

    $lowervalue = strtolower( $text );

    $replaceValue = str_replace( 'brown', 'red', $lowervalue );

    echo $replaceValue;
}

textChange( "The quick brown fox jumps over the lazy dog" );

?>