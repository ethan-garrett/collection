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
    <link rel="icon" href="favicon.png">
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <?php echo displayArray($resultArray); ?>
</body>
</html>
