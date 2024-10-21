<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mittente = $_POST["indirizzoMittente"];
        $destinatario = $_POST["indirizzoDestinatario"];
        $oggetto = $_POST["oggettoEmail"];
        $corpo = $_POST["descrizione"];

        echo "<h1>Mail Creata</h1>";
        echo "<h3>Informazioni</h3>";

        echo "<div style='background-color: DodgerBlue'>";
            echo "<h5>$mittente</h5>";
            echo "<h5>$destinatario</h5>";
            echo "<h5>$oggetto</h5>";
        echo "</div>";

        echo "<h3>Corpo della mail</h3>";

        echo "<div style='background-color: orange; width: 50%'>";
            echo "<h5>$corpo</h5>";
        echo "</div>";

        echo "<hr>";

        echo "<h3>Statistiche corpo email</h3>";

        echo "<div style='background-color: gray'>";
            echo "<p>" . str_word_count($corpo) . "</p>";
            echo "<p>" . strlen($corpo) . "</p>";
        echo "</div>";
    ?>
</body>
</html>