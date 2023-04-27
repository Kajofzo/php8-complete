<?php
session_start();
include '../includes/connection.php';




// Controleer of er een POST-verzoek is gedaan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de ingevulde gebruikersnaam en wachtwoord
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Controleer of de ingevulde gebruikersnaam en wachtwoord overeenkomen met de verwachte waarden
    if ($username === "kaj" && $password === "kaj123") {
        // Doorsturen naar beveiligde pagina bij succesvolle inlog
        $_SESSION['username'] = $username;
        header("Location: ../security\L@kU6aIvM1eQh\admin.php   ");
        exit;
    } else {
        // Foutmelding weergeven bij onjuiste inloggegevens
        $error = "Onjuiste gebruikersnaam of wachtwoord";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
</head>
<body>
    <h1>Inloggen</h1>
    <form method="post" action="login.php">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Inloggen">
    </form>
    <?php if (isset($error)) { echo $error; } ?>
</body>
</html>

