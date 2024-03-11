<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
</head>
<body>
    <h1>Generatore di Password</h1>

    <form action="index.php" method="GET">
        <label for="passwordLength">Lunghezza Password:</label>
        <input type="number" name="passwordLength" id="passwordLength" min="1" required>
        <button type="submit">Genera Password</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        include('functions.php');

        $passwordLength = $_GET['passwordLength'];

        $generatedPassword = generatePassword($passwordLength);
        echo '<p>La tua password generata: ' . $generatedPassword . '</p>';
    }
    ?>
</body>
</html>