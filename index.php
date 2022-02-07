<?php
require ('functions.php');
$db = dbLink();
$resultArray = fullRanking($db);

?>

<!DOCTYPE html>
<html>
<head>
    <link href="indexstyling.css" type="text/css" rel="stylesheet"/>
    <link href="normalize.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<?php displayArray($resultArray); ?>
</body>
</html>
