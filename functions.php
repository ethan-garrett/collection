<?php


/**links to the database
 *
 * @return PDO returns database link
 */
function dbLink(): PDO
{
    $db = new PDO('mysql:host=db; dbname=ethan-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**Queries the database and returns all entries ordered by rating
 *
 * @param $db - database link
 *
 * @return array - returns results of query as an array
 */
function fullRanking(PDO $db): array
{
    $mainQuery = $db->prepare("SELECT `player`, `rating` , `nationality` FROM `tetrisrankings` ORDER BY `rating` DESC;");
    $mainQuery->execute();

    $result = $mainQuery->fetchAll();
    return $result;
}

function countryRanking(PDO $db, string $country): array
{
    $mainQuery = $db->prepare("SELECT `player`, `rating` , `nationality` FROM `tetrisrankings` WHERE `nationality` = '$country' ORDER BY `rating` DESC;");
    $mainQuery->execute();

    $result = $mainQuery->fetchAll();
    return $result;
}

/**Displays the data in the array within HTML tags,
 * also checks if I have the flag file in an if statement which checks nationality data for flags I don't have images for
 * if i don't have the images it sets the nationality/image to XXX, the standard for no designated country
 *
 * @param $resultArray - array - contains results of database query
 * 
 * @return void - no return as it would end loop
 */
function displayArray(array $resultArray): string
{
    if (!count($resultArray))
    {
    return 'ERROR - No data found';
    }
    $i = 1;
    $output = '';
    foreach ($resultArray as $result)
    {

        if ($result['nationality'] == 'CRO'
            ||$result['nationality'] == 'CHN'
            ||$result['nationality'] == 'DEN'
            ||$result['nationality'] == 'ECU'
            ||$result['nationality'] == 'GUM'
            ||$result['nationality'] == 'HUN'
            ||$result['nationality'] == 'IND'
            ||$result['nationality'] == 'LUX'
            ||$result['nationality'] == 'MAC'
            ||$result['nationality'] == 'MDA'
            ||$result['nationality'] == 'MLT'
            ||$result['nationality'] == 'PSE'
            ||$result['nationality'] == 'ROC'
            ||$result['nationality'] == 'URY')
        {
            $result['nationality'] = 'XXX';
        }

        $output .=  "<div class='entryContainer'> 
                        <div class='id'> <p>#" . $i . "</p> </div>
                        <div class='flag'> <img src='images/" . $result['nationality'] . ".png' alt=''> </div>
                        <div class='player'> <p>" . $result['player'] ."</p> </div> 
                        <div class='rating'> <p>" . $result['rating'] . "</p> </div>
                    </div>";
        $i++;

    }
    return $output;
}