


<?php
$id = $_POST['values'];	
//$id = "value";	

$url = 'http://api.kabantayngbayan.ph/saro?app_id=52716e645e13dbe6706ac1ee&id='.$id.'';
$ch = curl_init($url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$c = curl_exec($ch);


$odata = json_decode($c);


foreach($odata as $key => $val){
//echo $val;
if ($key == "data") {
foreach($val as $key2 => $val2){
$year = $val2->year;
$prog = $val2->program_description;
$amount = $val2->amount;
echo "<br>".$year;
echo "<br>".$prog;
echo "<br>".$amount;

}}}

echo $id . "<br><form method='POST'>";
$comment = "<textarea name='comment' form='usrform'></textarea>";
echo "<br>Comment: ". $comment;
$rating = "1";
echo "<br>Rating: " . $rating;
$feedval = "value";
echo "<button name='rate' value='3' type='submit' onClick='".getVal()."'>APPROVED</button>";
echo "<button name='rate' value='2' type='submit' onClick='".getVal()."'>SLIGHTLY APPROVED</button>";
echo "<button name='rate' value='1' type='submit' onClick='".getVal()."'>DISAPPROVED</button>";

echo "</form>";


function getVal(){
$getV;
$getV = $_POST["rate"];


}

?>