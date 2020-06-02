<?php
session_start();
if($_SESSION['name']=='admin'){
	$userd=$_POST['userd'];
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	echo "<a href='usermod.php'>Back</a><br><br>";
	
	$query="DELETE FROM users WHERE USERNAME='$userd'";
	mysql_query($query);
	echo "<script>alert('USER DELETED');
	window.location.href = 'admin.php'; </script>";
}else{
	echo "<script>alert('SESSION EXPIRED');
	window.location.href = 'login.php'; </script>";
}
