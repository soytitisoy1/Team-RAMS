<!DOCTYPE html>
<!--<html>
<head>
<script>
function favBrowser()
{
var mylist=document.getElementById("myList");
document.getElementById("favorite").value=mylist.options[mylist.selectedIndex].text;
}
</script>
</head>

<body>
<form>
Select your favorite browser:
<select id="myList" onchange="favBrowser()">
  <option></option>
  <option>NCR</option>
  <option>CAR</option>  
  <option>Region 1</option>
  <option>Region 2</option>
  <option>Region 3</option>
</select>
<p>Your favorite browser is: <input type="text" id="favorite" size="20"></p>
</form>
</body>




///
<script language="javascript">
function populateClient() {

	var words = ["foot", "goose", "moose", "kangaroo"];	
    var serverList = document.getElementById("dropdown1");
    var clientList = document.getElementById("dropdown2");

     clientList.options.length = 0; // this removes existing options

     for (var i = 0; i <= serverList.options.length - 1; i++) {
         if (serverList.options[i].selected) {
             clientList.options.add(serverList.options[i].cloneNode()); // cloneNode here
         }
     }
 }
</script>

<select id="dropdown1" onchange="populateClient()">
    <option value="value1" name="ncr">NCR</option>
    <option value="value2">CAR</option>
    <option value="value3">Region 1</option>
    <option value="value4">Region 2</option>
    <option value="value5">Region 3</option>
</select>
<select id="dropdown2">
</select>







</html>
-->

<html>
<head>
<script type="text/javascript">
    function showForm() {
	 
        var selopt1 = document.getElementById("opts");
		var selopt = selopt1.selectedIndex;
		alert("noel"+selopt);
		var s = selopt1.options[selopt1.selectedIndex].value;
		alert("noel equals "+s);
		
        if (selopt == 0) {
		
            document.getElementById("f1").style.display = "block";
            document.getElementById("f2").style.display = "none";
			document.getElementById("f3").style.display = "none";
			document.getElementById("f4").style.display = "none";
			document.getElementById("f5").style.display = "none";
		alert("noel2"+selopt);	
        }
        if (selopt == 1) {
            document.getElementById("f2").style.display = "block";
            document.getElementById("f1").style.display = "none";
			document.getElementById("f3").style.display = "none";
			document.getElementById("f4").style.display = "none";
			document.getElementById("f5").style.display = "none";	
        }
	
		if (selopt == 3) {
            document.getElementById("f3").style.display = "block";
            document.getElementById("f1").style.display = "none";
			document.getElementById("f2").style.display = "none";
			document.getElementById("f4").style.display = "none";
			document.getElementById("f5").style.display = "none";
        }
		
		if (selopt == 4) {
            document.getElementById("f4").style.display = "block";
            document.getElementById("f1").style.display = "none";
			document.getElementById("f2").style.display = "none";
			document.getElementById("f3").style.display = "none";
			document.getElementById("f5").style.display = "none";
        }
		
		if (selopt == 5) {
            document.getElementById("f5").style.display = "block";
            document.getElementById("f1").style.display = "none";
			document.getElementById("f2").style.display = "none";
			document.getElementById("f3").style.display = "none";
			document.getElementById("f4").style.display = "none";
        }
		
        if (selopt == 0) {
			document.getElementById("f5").style.display = "none";
			document.getElementById("f4").style.display = "none";
            document.getElementById("f3").style.display = "none";
            document.getElementById("f2").style.display = "none";
            document.getElementById("f1").style.display = "none";
        }
    }
	
</script>

</head>
<body>


<div id="f1" style="display:none">
    <form name="form1">
        <select id="opts2" onchange="showForm()">
            <option value="0">Select Option</option>
            <option value="1">Option 1A</option>
            <option value="2">Option 1B</option>
        </select>
    </form>
</div>

<div id="f2" style="display:none">
    <form name="form2">
        <select id="opts3" onchange="showForm()">
            <option value="0">Select Option</option>
            <option value="1">Option 2A</option>
            <option value="2">Option 2B</option>
        </select>
    </form>
</div>


<br><br>
<?php
$db="sample";
$link = mysql_connect('localhost', 'root', '');
if (! $link) die(mysql_error());
mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());
$query = "SELECT * FROM regions"; //Write a query
$data = mysql_query($query);  //Execute the query
?>

<form action="<?php $_PHP_SELF ?>" method="GET">
<select name="opts">
<?php
while($fetch_options = mysql_fetch_array($data)) { //Loop all the options retrieved from the query
?>
 <!--//Added Id for Options Element--> 
<option  id="<?php echo $fetch_options['id']; ?>"  value="<?php echo $fetch_options['number_value']; ?>"><?php echo $fetch_options['region_name'];  ?></option><!--Echo out options-->

<?php
}
?>


</select>
<br>
<input type="submit" >
</form>
<?php
$opt1 = $_POST["opts"];

if($opt1 == null){
echo "pls select an item"; 
return;
}else{
echo $opt1;
}


?>
</body>
</html>

<!--
<div id="f2" style="display:none">
    <form name="form2">
        <select id="opts" onchange="showForm()">
			<option value="0">Select Option</option>
            <option value="1">Option 2A</option>
            <option value="2">Option 2B</option>
        </select>
    </form>
</div>

<div id="f3" style="display:none">
    <form name="form3">
        <select id="opts" onchange="showForm()">
            <option value="0">Select Option</option>
            <option value="1">Option 3A</option>
            <option value="2">Option 3B</option>
        </select>
    </form>
</div>

<div id="f4" style="display:none">
    <form name="form4">
        <select id="opts" onchange="showForm()">
            <option value="0">Select Option</option>
            <option value="1">Option 4A</option>
            <option value="2">Option 4B</option>
        </select>
    </form>
</div>

<div id="f5" style="display:none">
    <form name="form5">
        <select id="opts" onchange="showForm()">
            <option value="0">Select Option</option>
            <option value="1">Option 5A</option>
            <option value="2">Option 5B</option>
        </select>
    </form>
</div>

-->





















