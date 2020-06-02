<?php
session_start();
if((isset($_SESSION['name']))&&($_SESSION['name']!='admin')){
echo "<a href='welcome.php'>BACK</a><br><br>
<a href='train.php' style='font-family:gabriola; font-size:170%;'>Train list</a><br><br>";
echo "<form method='POST' action='bookc.php'>";
echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);background-repeat:no-repeat;background-size:100% 100%'>";
mysql_connect("localhost","root","");
mysql_select_db("irctc_users");
echo "<font style='font-family:gabriola;font-size:150%;color:#5E8185'>Select Source : </font>
<select name='source' id='source'>";
$query="SELECT DISTINCT SOURCE FROM trains";
$s=mysql_query($query);
while($r=mysql_fetch_array($s)){
	echo "<option>".$r[0]."</option>";
}
echo "</select>";
echo "<br><br>
<font style='font-family:gabriola;font-size:150%;color:#5E8185'>Select Destination :</font> 
<select name='destination' id='destination'>";
$query="SELECT DISTINCT DESTINATION FROM trains";
$d=mysql_query($query);
while($r1=mysql_fetch_array($d)){
	echo "<option>".$r1[0]."</option>";
}
echo "</select><br><br>";
echo "<input type='submit' name='sub' value='Check Trains'>";
echo "</form>";
}else{
	echo "<script>alert('SESSION EXPIRED!!');
	window.location.href = 'login.php'; </script>";
}

?>




