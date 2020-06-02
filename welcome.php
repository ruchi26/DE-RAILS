<?php
session_start();
if((isset($_SESSION['name']))&&($_SESSION['name'] != 'admin')){
	$user= $_SESSION['name'];
	echo  "<font face='gabriola'>LOGGED IN AS: </font><u>$user</u> ";
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	$na="SELECT * FROM users WHERE USERNAME='$user'";
	$result=mysql_fetch_array(mysql_query($na));
	echo "<center>";
	echo "<b><font face='gabriola' color='#5E8185' size='300%'>Welcome </font>";
	echo "<nbsp><font face='gabriola' color='#5E8185' size='300%'>$result[0]</font></b><br><br>";
	echo "<a href='profile.php'>USER PROFILE</a><br><br>";
	echo "<a href='book.php'>BOOK A TRAIN</a><br><br>";
	echo "<a href='booked.php'>BOOKING HISTORY</a><br><br>";
	echo "<a href='settings.php'>USER SETTINGS</a><br><br>";
	echo "<a href='logout.php'>LOGOUT</a>";
	echo "</center>";
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);background-repeat:no-repeat;background-size:100% 100%'>";
}else{
echo "<script>alert('SESSION EXPIRED!!');
	window.location.href = 'login.php'; </script>";
}
	
	
	

?>