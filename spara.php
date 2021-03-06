<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästbok</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Gästbok</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Läsa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="gastbok.php">Skriva</a>
            </li>
        </ul>
        <?php
        // Ta emot data som skickas
        $rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
        $meddelande = filter_input(INPUT_POST, 'meddelande', FILTER_SANITIZE_STRING);
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);

        // Finns data?
        if ($rubrik && $meddelande && $namn) {

            // Namn på filen som sparas
            $filnamn = "gastbok.txt";

            // Sätt samman texten
            $texten = "<h3>$rubrik</h3>\n" .
                      "<p>$meddelande</p>\n" .
                      "<p>$namn</p>";

            file_put_contents($filnamn, $texten, FILE_APPEND);

            // Berätta för användaren att texten har sparats
            echo "<p class=\"alert alert-success\">Din meddelande har sparats!</p>";
        }
        ?>
    </div>
</body>
</html>

<!-- 
Varianter
- Spara en faktura
- Spara en logg
- Spara enligt en mall..
 -->