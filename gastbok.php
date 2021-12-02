<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästboken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1 class="display-4">Gästboken</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Läsa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="gastbok.php">Skriva</a>
            </li>
        </ul>
        <form class="kol2" action="spara.php" method="POST">
            <label>Rubrik</label>
            <input type="text" name="rubrik" placeholder="Tex erik12" required>
            <label>Meddelande</label>
            <textarea name="meddelande" placeholder="Skriv din personliga text här.." required></textarea>
            <label>Namn</label>
            <input type="text" name="namn" required>
            <button class="primary">Spara</button>
        </form>
    </div>

    <?php
    echo "<p></p>";
    echo "<p></p>";
    echo "<p></p>";
    echo "<p></p>";
    echo "<p></p>";
    echo "<p></p>";
    ?>
</body>

</html>