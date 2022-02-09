<?php
require ('functions.php');
$db = dbLink();
$resultArray = fullRanking($db);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Classic Tetris Elo Rankings</title>
    <link href="indexstyling.css" type="text/css" rel="stylesheet"/>
    <link href="normalize.css" type="text/css" rel="stylesheet"/>
    <link rel="icon" type="image/png" size="32x32" href="favicon.png">
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <header>
        <p class="title">CLASSIC</p>
        <p class="title">TETRIS</p>
        <p class="title">ELO</p>
        <p class="title">RANKINGS</p>
    </header>
    <section class="entrySection">
        <?php echo displayArray($resultArray); ?>
    </section>
</body>
</html>
