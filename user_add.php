<?php
session_start();
if($_SESSION['name']=='admin'){

echo "<html>
<a href='admin.php'>Back</a>
<p style='font-size:180%;font-family:gabriola;color:#5E8185'><b><u>CREATE USER</u></p>
<script type='text/javascript' src='reg.js' ></script>
<form name='form1' id ='form1' method='POST' action='userc.php' onsubmit='return validForm()'>
<font style='font-family:gabriola;'>
First Name:<br><input id='fname' type='text' name='fname' size='30'>*<br>
Last Name:<br><input id='lname' type='text' name='lname' size='30'>*<br>
Date of Birth:<br><input id='dob' type='text' name='dob' size='30'>*<br>
Gender:<br><select id='gender' name='gender' style='width:243px;height:23px'>
<option value='Male'>Male</option>
<option value='Female'>Female</option>
<option value='Transgender'>Transgender</option>
</select>*<br>
E-mail Address:<br><input id='email' type='email' name='email' size='30'>*<br>
Contact Number:<br><input id='pnum' type='text' name='pnum' size='30'>*<br>
Username:<br><input id='user' type='text' name='user' size='30'>*<br>
Password:<br><input id='pass' type='password' name='pass' size='30'>*<br>
Confirm Password:<br><input id='cpass' type='password' name='cpass' size='30'>*<br>
<input type='submit' value='REGISTER'>&emsp;
<input type='reset' value='CLEAR'><br></font>
</form>
<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);background-repeat:no-repeat;background-size:100% 100%'>
</body>
</html>";
}else{
	echo "<script>alert('SESSION EXPIRED');
		window.location.href = 'login.php'; </script>";
}
?>