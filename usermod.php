<?php
session_start();
if($_SESSION['name']=='admin'){
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>";
	echo "<a href='user_mod.php'>BACK</a><br><br><br>";
	echo "<center><form method='POST' action='usermod2.php'>";
		echo "<font face='gabriola' color='#416064' size='6'>
		Enter username to modify&emsp;:&emsp;</font>
		<select name='userd' id='userd'>";
		$query1="SELECT DISTINCT USERNAME FROM users";
		$res1=mysql_query($query1);
		while($r1=mysql_fetch_array($res1)){
			if($r1[0] != 'admin'){
				echo "<option>".$r1[0]."</option>";
			}
		}
		echo "</select>&emsp;<input type='submit' value='MODIFY USER DETAILS'>";
		echo "</form></center>";
	
	
}else{
	echo "<script>alert('SESSION EXPIRED');
	window.location.href = 'login.php'; </script>";
}

?>