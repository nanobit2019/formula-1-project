<?php include 'header.php' ?>

<style>
<?php include 'css/style.css'; ?>
</style>


<main>
<?php
$country = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
?>

<table class="scheduleTable">
    <tr>
    <th class="scheduleTitle">Country</th>
    <th class="scheduleTitle">Capital</th>
    <th class="scheduleTitle">Dates</th>
</tr>

<tr>
<?php 
    foreach($country as $countryRace=> $capitalRace)
    {
        echo "<tr><td class='arrayTable'> $countryRace </td>";
        echo "<td class='arrayTable'> $capitalRace </td>";

    // https://thisinterestsme.com/generate-random-date-php/ to do the random dates in the schedule table 

        $timestamp = mt_rand(1, time());
 
        //Format that timestamp into a readable date string.
        $randomDate = date("d M 2020", $timestamp);
         
        //Print it out.
            echo "<td class='arrayTable'> $randomDate;</td></tr>";
    }


?>

</table>





</main>



<?php include 'footer.php' ?>