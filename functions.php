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
function fullRanking($db): array
{
    $mainQuery = $db->prepare("SELECT `player`, `rating` , `nationality` FROM `tetrisrankings` ORDER BY `rating` DESC;");
    $mainQuery->execute();

    $result = $mainQuery->fetchAll();
    return $result;
}


/**Displays the data in the array within HTML tags, also checks if I have the flag file in an if statement which checks nationality data for flags I don't have images for
 * @param $resultArray - array - contains results of database query
 * @return void - no return as it would end loop
 */
function displayArray($resultArray)
{
    $i = 1;
    $output = '';
    foreach ($resultArray as $result)
    {
        $name = $result['player'];
        $elo = $result['rating'];
        $country = $result['nationality'];
        if ($country == 'CRO'
            ||$country == 'CHN'
            ||$country == 'DEN'
            ||$country == 'ECU'
            ||$country == 'GUM'
            ||$country == 'HUN'
            ||$country == 'IND'
            ||$country == 'LUX'
            ||$country == 'MAC'
            ||$country == 'MDA'
            ||$country == 'MLT'
            ||$country == 'PSE'
            ||$country == 'ROC'
            ||$country == 'URY')
        {
            $country = 'XXX';
        }

        $output .=  "<div class='entryContainer'> 
                        <div class='id'> <p>#" . $i . "</p> </div>
                        <div class='flag'> <img src='images/" . $country . ".png' alt=''> </div>
                        <div class='player'> <p>" . $name ."</p> </div> 
                        <div class='rating'> <p>" . $elo . "</p> </div>
                    </div>";
        $i++;

    }
    return $output;
}