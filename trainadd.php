<?php
session_start();
if(isset($_SESSION['name'])){
	echo "<html>
	<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>
	<a href='admin.php'>BACK</a><br>
	<center>
	<u><font face='gabriola' color='#416064' size='6'>NEW TRAIN</font></u><br><br>
	<script type='text/javascript' src='trainj.js' ></script>
	<form name='form1' id ='form1' method='POST' action='t_add.php' onsubmit='return validForm()'>
	<font face='gabriola' color='#416064'>
	Enter train no.: <input type='text' name='tno'><br>
	Enter train name: <input type='text' name='tname'><br>
	Enter source: <input type='text' name='source'><br>
	Enter destination: <input type='text' name='destination'><br>
	Enter departure time: <input type='text' name='departure'><br>
	Enter arrival time: <input type='text' name='arrival'><br>
	Enter total seats: <input type='number' name='seats'><br>
	Enter fare per seat: <input type='number' name='fare'><br><br>
	<input type='submit' value='ADD TRAIN'>
	</font>
	</form>
	</center>
	</html>";
}else{
	echo "<script>alert('SESSION EXPIRED!!');
	window.location.href = 'login.php'; </script>";
}