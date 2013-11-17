<html>
<body>
<?php
$dept = $_POST["department"];
$agency = $_POST["agency"];
$year = $_POST["year"];
$region = $_POST["region"];	

?>
Department <?php echo $dept; ?><br> <!-- SUCS -->
Agency: <?php echo $agency; ?><br> <!-- PUP -->
Year: <?php echo $year; ?><br> <!-- 2013 -->
Region: <?php echo $region; ?><br> <!-- NCR -->
<?php  ?>
<?php 


function display()
{


$url = 'http://api.kabantayngbayan.ph/saro?app_id=52716e645e13dbe6706ac1ee&agency_code='.$agency.'&department_code='.$dept.'&year='.$year.'&region='.$region.'';$ch = curl_init($url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$c = curl_exec($ch);
echo $c;
}

display();
?>

</body>
</html>