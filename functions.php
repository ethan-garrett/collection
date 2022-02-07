<?php

/**
 * @return void
 */
function mainQuery()
{
//save the conn in a variable
    $db = new PDO('mysql:host=db; dbname=ethan-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//create the sql query to run
    $mainQuery = $db->prepare("SELECT `player`, `rating` , `nationality` FROM `tetrisrankings` ORDER BY `rating` DESC;");
//$query->bindParam(':name', $name);
    $mainQuery->execute();

//grab the results from the query that has been run
    $result = $mainQuery->fetchAll();

    echo '<pre>';
    var_dump($result);
    echo '<pre>';
}