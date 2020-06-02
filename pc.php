<?php
session_start();
if(isset($_SESSION['name'])){
$user=$_SESSION['name'];
$new=$_POST['ph'];
mysql_connect("localhost","root","");
mysql_select_db("irctc_users");
$query="UPDATE USERS SET MOB='$new' WHERE USERNAME='$user'";
mysql_query($query);
echo "<script>alert('PHONE NUMBER UPDATED!!');
	window.location.href = 'settings.php'; </script>";
}else{
	echo "<script>alert('SESSION EXPIRED');
	window.location.href = 'login.php'; </script>";
}

?>