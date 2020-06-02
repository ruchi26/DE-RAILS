<?php
session_start();
if($_SESSION['name']=='admin'){
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>";
	echo "<a href='admin.php'>Back</a><br><br>";
	$query="SELECT * FROM trains";
	$res=mysql_query($query);
	if(mysql_num_rows($res) == 0){
		echo "<script>alert('No trains found');
		window.location.href = 'admin.php'; </script>";	
	}else{
		echo "<center><b><u><font face='gabriola' color='#5E8185' size='4'>TRAINS</font></u></b>:<br><br>";
		echo "<table border=2 style='color:#416064;font-family:gabriola'>";
		echo "<tr><th>Train No.</th><th>Train Name</th><th>Source<th>Destination</th><th>Departure Time</th><th>Arrival Time</th><th>No of Seats Available</th><th>Fare Per Seat</th></tr>";
		while($r=mysql_fetch_array($res)){
			echo "<tr>";
			echo "<td>".$r[0]."</td>";
			echo "<td>".$r[1]."</td>";
			echo "<td>".$r[2]."</td>";
			echo "<td>".$r[3]."</td>";
			echo "<td>".$r[4]."</td>";
			echo "<td>".$r[5]."</td>";
			echo "<td>".$r[6]."</td>";
			echo "<td>".$r[7]."</td>";
			echo "</tr>";
		}
		echo "</table></center>";
	}
}else{
	echo "<script>alert('SESSION EXPIRED');
	window.location.href = 'login.php'; </script>";
}


?>