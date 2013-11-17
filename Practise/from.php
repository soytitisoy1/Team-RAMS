
<html>



<?php
$dept = "SUCS";
$agency = "PUP";
$year = "2013";
$region = "NCR";
$url = 'http://api.kabantayngbayan.ph/saro?app_id=52716e645e13dbe6706ac1ee&agency_code='.$agency.'&department_code='.$dept.'&year='.$year.'&region='.$region.'';
$ch = curl_init($url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$c = curl_exec($ch);


$odata = json_decode($c);
foreach($odata as $key => $val){
//echo $val;
if ($key == "data") {
foreach($val as $key2 => $val2){
$year = $val2->id;
$proj = $val2->program_description;
echo "<br><form method='POST' action='to.php'>";
echo "<input type='hidden' name='values' "." value='".$year."' />";
echo "<input type='submit' value='GIVE FEEDBACK' />";
echo "</form>";
/**echo "<a href='to.php?value='>".$year."</a>"; */
}
}
}
?>


</html>