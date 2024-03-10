<?php

function generatePassword($length) {
    // Define character sets for the password
    $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_+=<>?';

    // Combine all character sets
    $allCharacters = $lowercaseLetters . $uppercaseLetters . $numbers . $symbols;

    // Shuffle the combined characters
    $shuffledCharacters = str_shuffle($allCharacters);

    // Get the first $length characters as the password
    $generatedPassword = substr($shuffledCharacters, 0, $length);

    return $generatedPassword;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>

    <form action="index.php" method="GET">
        <label for="passwordLength">Lunghezza Password:</label>
        <input type="number" name="passwordLength" id="passwordLength" min="1" required>
        <button type="submit">Generatore di Password</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
       

        // Get the password length from the form
        $passwordLength = $_GET['passwordLength'];

        // Generate and display the password
        $generatedPassword = generatePassword($passwordLength);
        echo '<p>La tua password: ' . $generatedPassword . '</p>';
    }
    ?>
</body>
</html>