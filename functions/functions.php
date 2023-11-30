<?php
function generatePassword()
{
    $passwordLength = $_GET["password-length"];
    $symbols = '!?&%$<>^+-\*/()[]{}@#\_=';
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $upLetters = strtoupper($letters);
    $numbers = '0123456789';
    $newPassword = "";
    while (strlen($newPassword) < $passwordLength) {
        $allCharacters = $symbols . $letters . $upLetters . $numbers;
        $newCharacter = $allCharacters[rand(0, strlen($allCharacters) - 1)];
        $newPassword .= $newCharacter;
    }
    return $newPassword;
}
?>