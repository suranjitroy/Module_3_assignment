<?php

echo "<h1>Task 5: Password Generator</h1> <br/>";

function generatePassword($length) {
    $allCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $allCharacters[rand(0, strlen($allCharacters) -1)];
    }
    
    return $password;
}

echo generatePassword(12);
?>