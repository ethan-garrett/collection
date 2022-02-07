<?php

function dbLink()
{

    $db = new PDO('mysql:host=db; dbname=ethan-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;

}

function fullRanking($db)
{
    $mainQuery = $db->prepare("SELECT `player`, `rating` , `nationality` FROM `tetrisrankings` ORDER BY `rating` DESC;");
    $mainQuery->execute();


    $result = $mainQuery->fetchAll();

    echo '<pre>';
    var_dump($result);
    echo '<pre>';
}