<?php

$dept = "SUCS" ;
$agency = "PUP";
$year = "2013";
$region = "NCR";

echo $dept;
echo $agency;
echo $year;
echo $region;


$url = 'http://api.kabantayngbayan.ph/saro?app_id=52716e645e13dbe6706ac1ee&agency_code='.$agency.'&department_code='.$dept.'&year='.$year.'&region='.$region.'';
$ch = curl_init($url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$c = curl_exec($ch);
echo $c;

?>
