<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP Page</title>
</head>
<body>
    <h1>Benvenuto su db-scuola!</h1>
    <p>Questa è una pagina di test PHP per verificare il funzionamento dell'applicazione su Heroku.</p>

    <h2>Informazioni sul server</h2>
    <?php
        echo "<p>Versione di PHP: " . phpversion() . "</p>";
        echo "<p>Indirizzo IP del server: " . $_SERVER['SERVER_ADDR'] . "</p>";
        echo "<p>Nome del server: " . $_SERVER['SERVER_NAME'] . "</p>";
        echo "<p>Software del server: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";

        echo "test deploy su git collegato a heroku"
    ?>
</body>
</html>
