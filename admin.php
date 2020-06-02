<?php
session_start();
if(isset($_SESSION['name'])){
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>";
	echo "<center><br><h1 style='color:#5E8185;font-size:300%;font-family:gabriola'>
	WELCOME ADMIN</h1></center><br>";
	echo "<center>";
	echo "<font face='gabriola' color='#5E8185' size='4'>";
	echo "<a href='profile.php'>PROFILE</a><br>";
	echo "<a href='d_train.php'>DISPLAY ALL TRAINS</a><br>";	
	echo "<a href='d_book.php'>DISPLAY BOOKINGS</a><br>";
	echo "<a href='d_user.php'>DISPLAY USERS</a><br>";
	echo "<a href='user_add.php'>ADD A NEW USER</a><br>";
	echo "<a href='user_mod.php'>MODIFY USERS</a><br>";	
	echo "<a href='trainadd.php'>ADD A NEW TRAIN</a><br>";
	echo "<a href='settings.php'>SETTINGS</a><br>";
	echo "<a href='logout.php'>LOGOUT</a>";
	
	echo "</font></center>";
}else{
	echo "<script>alert('NOT ADMIN!!');
	window.location.href = 'login.php'; </script>";
}


?>