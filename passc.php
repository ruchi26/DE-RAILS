<?php
session_start();

if(isset($_SESSION['name'])){
	$user=$_SESSION['name'];
	$pass2=$_POST['pa2'];
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	
	$p="SELECT `PASSWORD` FROM `users` WHERE `USERNAME`='$user'";
	$res=mysql_query($p);
	mysql_query("UPDATE users SET PASSWORD='$pass2' WHERE USERNAME='$user'");
	echo "<script>alert('Password changed!!');
	window.location.href = 'settings.php'; </script>";
	
}else{
	echo "<script>alert('SESSION EXPIRED!!');
	window.location.href = 'login.php'; </script>";;
}


?>