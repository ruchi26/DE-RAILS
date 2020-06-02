<?php
session_start();
if($_SESSION['name']=='admin'){
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
    background-repeat:no-repeat;background-size:100% 100%'>
	<a href='admin.php'>BACK</a><br><br><br><br>
	<center><h2><a href='usermod.php'><font face='gabriola' size='6'>
	Edit Existing User Profiles </font></a><h2>
	<h2><a href='user_del.php'><font face='gabriola' size='6'>
	Delete Users</font></a><h2><br><br></center></body>";
}else{
	echo "<script>alert('SESSION EXPIRED');
	window.location.href = 'login.php'; </script>";
}
