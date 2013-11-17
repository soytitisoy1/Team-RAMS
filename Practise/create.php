<?php

$host_name="localhost";
$username="root";
$password="";
$table_name="register";
$db_name="sampleDB";

mysql_connect("$host", "$username", "$password") or die("Connection Error");
mysql_select_db("$db_name") or die("Cannot select db");

$nusername=$_POST['nuser'];
$npassword=$_POST['npass'];

$cpass=md5($npassword);


$nemail=$_POST['nemail'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$ncontact=$_POST['cnum'];


if ($nusername | $npassword | $nemail | $fname | $lname | $ncontact == ""){
echo "Please fill all the fields";
}
else{

$sql_command = "INSERT INTO $table_name(nusername,npassword,nemail,fname,lname,ncontact)VALUES('$nusername', '$cpass', '$nemail', '$fname', '$lname', '$ncontact')";
$result =mysql_query($sql_command);

if($result){
echo "You are now register";
}
else{
echo "Error";
}

}


?>

<html>
<body>

</body>
</html>