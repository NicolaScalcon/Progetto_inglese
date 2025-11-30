<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataNascita = $_POST["data_nascita"];
    $nascita = new DateTime($dataNascita);
    $oggi = new DateTime();
    $diff = $oggi->diff($nascita);

    $testo = "Hai {$diff->y} anni, {$diff->m} mesi e {$diff->d} giorni.";

    header("Content-type: application/rtf");
    header("Content-Disposition: attachment; filename=eta.rtf");

    $rtf = "{\\rtf1\\ansi\\deff0
    {\\fonttbl{\\f0 Arial;}}
    \\f0\\fs24
    \\b Risultato Calcolo Eta \\b0\\par
    \\par
    $testo
    }";

    echo $rtf;
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Calcolatore di Età</title>
</head>
<body>
    <h2>Calcolatore di Età</h2>
    <form method="post" action="">
        <label for="data_nascita">Inserisci la tua data di nascita:</label><br><br>
        <input type="date" name="data_nascita" id="data_nascita" required><br><br>
        <input type="submit" value="CALCOLA E SCARICA">
    </form>
</body>
</html>
