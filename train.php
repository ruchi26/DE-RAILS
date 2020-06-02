<?php
session_start();
if((isset($_SESSION['name']))&&($_SESSION['name'] != 'admin')){
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	$query="SELECT * FROM trains";
	$res=mysql_query($query);
	echo "<html>";
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>";
	echo "<a href='book.php'>BACK</a><br><br>";
	echo "<center>";
	echo "<table border=2 style='color:#416064;font-size:100%;font-family:gabriola'>";
	echo "<tr><th>Train No.</th><th>Train Name</th><th>Source</th><th>Destination</th><th>Time of Arrival</th><th>Available Seats</th><th>Time of Departure</th></tr>";
	while($r=mysql_fetch_array($res)){
	echo "<tr>
	<td>".$r[0]."</td>
	<td>".$r[1]."</td>
	<td>".$r[2]."</td>
	<td>".$r[3]."</td>
	<td>".$r[4]."</td>
	<td>".$r[5]."</td>
	<td>".$r[6]."</td>
	</tr>";
	}
	echo "</table><br><br><br>
	<form method='POST' action='book1.php'>
	<font face='gabriola' color='#5E8185' size='5'>Enter Train No.:  </font><select name='tno' id='tno' size='1'>";
	$res1=mysql_query($query);
	while($s=mysql_fetch_array($res1)){
		echo "<option>".$s[0]."</option>";
	}
	echo "</select>";
	echo "&ensp;<input type='submit' name='ch' value='Check Seats'><br><br>
	</form>";
	echo "</center></body></html>";
}else{
		echo "<script>alert('SESSION EXPIRED');
		window.location.href = 'login.php'; </script>";
}
?>