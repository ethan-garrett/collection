<?php
require_once ('functions.php');
$db = dbLink();
$resultArray = fullRanking($db);
$result = displayArray($resultArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Classic Tetris Elo Rankings</title>
    <link href="normalize.css" type="text/css" rel="stylesheet"/>
    <link href="indexstyling.css" type="text/css" rel="stylesheet"/>
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
        <?php echo $result; ?>
    </section>
</body>
</html>
