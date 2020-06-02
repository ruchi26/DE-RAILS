<?php

session_start();
if(isset($_SESSION['name'])){
	$user=$_SESSION['name'];
	if($user == "admin"){		
		echo "<a href='admin.php'>Back</a><br>";
	}else{
		echo "<a href='welcome.php'>Back</a><br>";
		}
	echo "<center>";
	echo "<a href='pass.php' style='font-size:25px;font-family:gabriola;'><br><br>Change Password<br></a><br><br>";
	echo "<a href='p.php' style='font-size:25px;font-family:gabriola;'>Change Phone Number<br></a><br><br>";
	echo "<a href='em.php' style='font-size:25px;font-family:gabriola;'>Change E-mail ID</a><br><br><br>";
	echo "</center>";
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);background-repeat:no-repeat;background-size:100% 100%'>";
}else{
	echo "<script>alert('SESSION EXPIRED!!');
	window.location.href = 'login.php'; </script>";
}

?>