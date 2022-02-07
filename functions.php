<?php


/**links to the database
 * @return PDO returns database link
 */
function dbLink()
{
    $db = new PDO('mysql:host=db; dbname=ethan-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}


/**Queries teh database and returns all entries ordered by rating
 * @param $db - database link
 * @return array - returns results of query as an array
 */
function fullRanking($db)
{
    $mainQuery = $db->prepare("SELECT `player`, `rating` , `nationality` FROM `tetrisrankings` ORDER BY `rating` DESC;");
    $mainQuery->execute();

    $result = $mainQuery->fetchAll();
    return $result;
}