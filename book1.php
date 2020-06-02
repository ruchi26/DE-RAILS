<?php
session_start();
if((isset($_SESSION['name']))&&($_SESSION['name'] != 'admin')){
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>";
	echo "<a href='book.php'>BACK</a><br><br>";
	echo "<center>";
	$user=$_SESSION['name'];
	$tno=$_POST['tno'];
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	$query="SELECT ASEATS FROM trains WHERE TNUM='$tno'";
	$res=mysql_query($query);
	
	$x=mysql_fetch_array($res);
	if($x[0] == 0){
		
		echo "<script>alert('No seats available!!');
		window.location.href = 'book.php'; </script>";
	}else{
		$query1="SELECT * FROM trains WHERE TNUM='$tno'";
		$res1=mysql_query($query1);
		echo "<font face='gabriola' color='#5E8185' size='100%'>";
		echo "<table border=2 style='color:#416064;font-family:gabriola'>";
		echo "<tr><th >Train No.</th><th>Train Name</th><th>Source<th>Destination</th><th>Departure Time</th><th>Arrival Time</th><th>Fare per ticket</th><th>Available Seats</th></tr>";
				
		while($r=mysql_fetch_array($res1)){
				echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[4]."</td></tr>";
				
		}
		echo "</table></font><br><br>";
		echo "<form method='POST' action='final.php'><input type='hidden' name='tno1' id='tno1' value='$tno'>";
		echo "<font color='#5E8185' face='gabriola' size='5'>
		Select Number of Seats:&ensp;</font>
		<input type='number' name='no' id='no'>";
		echo "&emsp;<input type='submit' value='Book'>";
		echo "</form></center>";
	}
}else{
	echo "<script>alert('SESSION EXPIRED!!');
	window.location.href = 'login.php'; </script>";
}
?>