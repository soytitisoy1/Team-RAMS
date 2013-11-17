<html>
<head></head>
<body>





<br>
<form>
<select name="o" >
<option value="1" >1</option>
</select>
<input type="submit" >
</form>
<?php
if (isset($_GET["o"])){
$opt1 = $_GET["o"];
echo $opt1;
}
else{
echo "pls select";
}


?>
</body>
</html>