<?php
function generatePassword()
{
    $passwordLength = $_GET["password-length"];
    $repeat = $_GET["char-repeat"];
    $allowed = $_GET["allowed"];
    $characters = [
        'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        '0123456789',
        '!?&%$<>^+-\*/()[]{}@#\_=',
    ];
    if (count($allowed) === 1 && $allowed[0] === "1" && $passwordLength > 10 && $repeat === 'no') {
        return 'error';
    } else {
        $allowedCharacters = '';
        foreach ($allowed as $key => $value) {
            $allowedCharacters .= $characters[$value];
        }

        $newPassword = "";
        while (strlen($newPassword) < $passwordLength) {
            $newCharacter = $allowedCharacters[rand(0, strlen($allowedCharacters) - 1)];
            if ($repeat === 'no') {
                if (!str_contains($newPassword, $newCharacter)) {
                    $newPassword .= $newCharacter;
                }
            } else {
                $newPassword .= $newCharacter;
            }
        }
        return $newPassword;
    }

}
?>