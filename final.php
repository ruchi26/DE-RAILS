<?php
session_start();
if((isset($_SESSION['name']))&&($_SESSION['name'] != 'admin')){
	$user=$_SESSION['name'];
	$no=$_POST['no'];
	$tno=$_POST['tno1'];
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>";
	echo "<a href='book.php'>Back</a><br><br>";
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	
	$query="SELECT * FROM trains WHERE TNUM='$tno'";
	$res=mysql_fetch_array(mysql_query($query));
	$a=$res[4]-$no;
	if($a>=0){
		$query1="UPDATE trains SET ASEATS='$a' WHERE TNUM='$tno'";
		mysql_query($query1);
		$query2="SELECT * FROM trains WHERE TNUM='$tno'";
		$res2=mysql_fetch_array(mysql_query($query2));
		$b=$no*$res[7];
		$query3="INSERT INTO user_book(USERNAME,TRAIN_NO,TRAIN_NAME,SOURCE,DESTINATION,DEPARTURE,ARRIVAL,SEATS,TOTAL_FARE) VALUES('$user','$res2[0]','$res2[1]','$res2[2]','$res2[3]','$res2[5]','$res2[6]','$no','$b')";
		mysql_query($query3);
		$query4="SELECT * FROM user_book WHERE TRAIN_NO='$tno' AND USERNAME='$user'";
		$res4=mysql_query($query4);
		echo "<script>alert('Booking Successful');</script>";
		echo "<center><font color='#5E8185' face='gabriola' size='5'><u>Ticket Receipt:</u></font><br><br>";
		echo "<table border=2 style='color:#5E8185;font-size:100%;font-family:gabriola'>";
		echo "<tr><th>PNR</th><th>Train No.</th><th>Train Name</th><th>Source<th>Destination</th><th>Departure Time</th><th>Arrival Time</th><th>No of Seats Booked</th><th>Total Fare</th></tr>";
		while($r=mysql_fetch_array($res4)){
				echo "<tr><td>".$r[0]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td>".$r[9]."</td></tr>";
				
		}
		echo "</table><br><br>";
		echo "<a href='welcome.php'>HOME</a>";
	}else{
	 echo  "<script>alert('NUMBER OF SEATS YOU ENTERED EXCEEDS AVAILABLE SEATS');
	window.location.href = 'book.php'; </script>";	
	}
	
}else{
	echo "<script>alert('SESSION EXPIRED!!');
	window.location.href = 'login.php'; </script>";
}

?>