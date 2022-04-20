<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$leerling=array('nr' => 152258, 'voornaam' => 'ruben', 'achternaam' => 'koning', 'geboortejaar' => 2005);

echo "<pre>Leerling:";
print_r($leerling);
echo "</pre>";
echo "<h2>" .$leerling['voornaam']." ".$leerling['achternaam']." is geboren in ".$leerling['geboortejaar']. "</h2>";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>