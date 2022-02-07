<?php
require ('functions.php');
$db = dbLink();
$result = fullRanking($db);
echo '<pre>';
var_dump($result);
echo '<pre>';