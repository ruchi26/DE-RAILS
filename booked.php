<?php
session_start();
if((isset($_SESSION['name']))&&($_SESSION['name']!='admin')){
	echo "<a href='welcome.php'>BACK</a><br><br>";
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>";
echo "<center>";
	$user=$_SESSION['name'];
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	$query="SELECT * FROM user_book WHERE USERNAME='$user'";
	$query2="SELECT * FROM users WHERE USERNAME='$user'";
	$result=mysql_query($query2);
	$res=mysql_query($query);
	if(mysql_num_rows($res) != 0){
		
		echo "<br><table border=2 style='color:#5E8185;font-size:100%;font-family:gabriola'>";
		echo "<tr><th>PNR</th><th>Train No.</th><th>Train Name</th><th>Source<th>Destination</th><th>Departure Time</th><th>Arrival Time</th><th>No of Seats Booked</th><th>Total Fare</th></tr>";
		while($r=mysql_fetch_array($res)){
			echo "<tr><td>".$r[0]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td>".$r[9]."</td></tr>";
		}
		echo "</table><br><form method='POST' action='cancel.php' name='form1'>
		<font color='#5E8185' face='gabriola' size='5'>Select PNR to cancel : </font><select name='can' id='can'>";
		$query3="SELECT PNR FROM user_book WHERE USERNAME='$user'";
		$res2=mysql_query($query3);
		while($s=mysql_fetch_array($res2)){
			echo "<option>".$s[0]."</option>";		
		}
		echo "</select>";
		echo "&emsp;<input type='submit' name='el' value='Cancel Ticket'><br><br><br></form></center></body>";
	}else{
			echo "<script>alert('No booking history');
			window.location.href = 'welcome.php'; </script>";
	}
}else{
	echo "<script>alert('Session Expired!!');
	window.location.href = 'login.php'; </script>";
}
?>