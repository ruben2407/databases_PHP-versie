<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=round($rec,7);
$piet=floor($rec*1000000)/1000000;
$a=2;
$b=2;
$ck=pow($a,2) + pow($b,2);
$c=sqrt($ck);
$mod=fmod(14,3);
echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $afgerond<br>
      $piet<br>
      de stelling van piet is  $c 
      $mod";



/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>