<?php
session_start();
if($_SESSION['name']=='admin'){
	$userm=$_POST['userd'];
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	echo "<a href='usermod.php'>Back</a><br><br>";
	echo "<script type='text/javascript' src='userj.js' ></script>
	<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);background-repeat:no-repeat;background-size:100% 100%'>
	<form name='form1' id ='form1' method='POST' action='usermodc.php' onsubmit='return validForm()'>
	<font style='font-family:gabriola;'>
	E-mail Address:<br><input id='email' type='email' name='email' size='30'>*<br>
	Contact Number:<br><input id='pnum' type='text' name='pnum' size='30'>*<br>
	Username:<br><input id='user' type='text' name='user' size='30'>*<br>
	Password:<br><input id='pass' type='password' name='pass' size='30'>*<br>
	<input type='hidden' value='$userm' name='x' id='x'>	
	<input type='submit' value='UPDATE'>&emsp;
	<input type='reset' value='RESET'><br></font>
	</form>
	
	</body>
	</html>";
	
	
}else{
	echo "<script>alert('SESSION EXPIRED');
	window.location.href = 'login.php'; </script>";
}

?>