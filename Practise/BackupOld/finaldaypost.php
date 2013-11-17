<html>
<body>

<form action="finaldaypost.php" method="post">
Department: <input type="text" name="department"><br>
Agency: <input type="text" name="agency"><br>
Year: <input type="text" name="year"><br>
Region: <input type="text" name="region"><br>
<input type="submit" type="submit">

<?php /*
$dept = $_POST["department"];
$agency = $_POST["agency"];
$year = $_POST["year"];
$region = $_POST["region"];	
*/
?>

<?php 


function display()
{
$dept = $_POST["department"];
$agency = $_POST["agency"];
$year = $_POST["year"];
$region = $_POST["region"];	
$url = 'http://api.kabantayngbayan.ph/saro?app_id=52716e645e13dbe6706ac1ee&agency_code='.$agency.'&department_code='.$dept.'&year='.$year.'&region='.$region.'';$ch = curl_init($url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$c = curl_exec($ch);

//$obj2 = json_decode($c);
//var d
//echo $c;
// ----------------------------------------------------------
// ----------------------------------------------------------
//$odata = var_dump(json_decode($c)); //this is the original file
$odata = json_decode($c);


// The code below display more clear array:
//print_r($odata);

// This code below display values
foreach($odata as $key => $val){
//echo $val;
if ($key == "data") {
foreach($val as $key2 => $val2){
$year = $val2->year;
echo $year;
echo "<html><body><br><br></body></html>";
echo $val2->year;
echo "<html><body><br></body></html>";
echo $val2->department_code;
echo "<html><body><br></body></html>";
echo $val2->agency_code;
echo "<html><body><br></body></html>";
echo $val2->region;
echo "<html><body><br></body></html>";
echo $val2->program_description;
echo "<html><body><br></body></html>";
echo $val2->purpose;
echo "<html><body><br></body></html>";
echo $val2->amount;







}
}
/*
if (gettype($value)=="object"){
	foreach ($value as $key => $value){
	}
}
*/
}







//var_dump($odata);

/*
foreach ( $odata->data as $id => $data ) {

echo $id;
var_dump($data);
echo '<hr />';

}

*/
//echo $odata->[0]->status;   //[1]["status"];

//var_dump(json_decode($c, true));




}

display();
?>
</form>
</body>
</html>