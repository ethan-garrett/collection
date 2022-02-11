<?php
require_once 'functions.php';
$db = dbLink();
$country = $_GET['country'];
$countryResult = countryRanking($db, $country);
$countryDisplay = displayArray($countryResult);

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
<section class="countryFormContainer">
    <form action="country.php" method = "get">
        <select id="country" name="country">
            <option value="ARG">Argentina</option>
            <option value="AUS">Australia</option>
            <option value="AUT">Austria</option>
            <option value="AZE">Azerbaijan</option>
            <option value="BEL">Belgium</option>
            <option value="BRA">Brazil</option>
            <option value="CAN">Canada</option>
            <option value="CHL">Chile</option>
            <option value="CHN">China</option>
            <option value="COL">Columbia</option>
            <option value="CRO">Croatia</option>
            <option value="CZE">Czech Republic</option>
            <option value="DEN">Denmark</option>
            <option value="DOM">Dominican Republic</option>
            <option value="ECU">Ecuador</option>
            <option value="ESP">Spain</option>
            <option value="FIN">Finland</option>
            <option value="FRA">France</option>
            <option value="GBR">Great Britain</option>
            <option value="GER">Germnay</option>
            <option value="GRE">Greece</option>
            <option value="GUM">Guam</option>
            <option value="HKG">Hong Kong</option>
            <option value="HUN">Hungary</option>
            <option value="INA">Indonesia</option>
            <option value="IND">India</option>
            <option value="IRL">Ireland</option>
            <option value="ISL">Iceland</option>
            <option value="ITA">Italy</option>
            <option value="JPN">Japan</option>
            <option value="KAZ">Kazakhstan</option>
            <option value="KOR">South Korea</option>
            <option value="LTU">Lithuania</option>
            <option value="LUX">Luxembourg</option>
            <option value="MAC">Macao</option>
            <option value="MDA">Moldova</option>
            <option value="MEX">Mexico</option>
            <option value="MGL">Mongolia</option>
            <option value="MKD">North Macedonia</option>
            <option value="MLT">Malta</option>
            <option value="MYS">Malaysia</option>
            <option value="NED">Netherlands</option>
            <option value="NOR">Norway</option>
            <option value="NZL">New Zealand</option>
            <option value="PHI">Philippines</option>
            <option value="POL">Poland</option>
            <option value="POR">Portugal</option>
            <option value="PUR">Puerto Rico</option>
            <option value="ROU">Romania</option>
            <option value="PSE">Malta</option>
            <option value="ROC">ROC</option>
            <option value="RUS">Russia</option>
            <option value="SGP">Singapore</option>
            <option value="SLO">Slovenia</option>
            <option value="SUI">Switzerland</option>
            <option value="SWE">Sweden</option>
            <option value="THA">Thailand</option>
            <option value="TUR">Turkey</option>
            <option value="UKR">Ukraine</option>
            <option value="URY">Uruguay</option>
            <option value="USA">United States of America</option>
            <option value="VIE">Vietnam</option>
            <option value="XXX">No Country</option>
            <input type="submit">
        </select>
    </form>
</section>
<section class="entrySection">
    <?php echo $countryDisplay; ?>
</section>
</body>
</html>