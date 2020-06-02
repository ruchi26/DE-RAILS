<?php
session_start();
if((isset($_SESSION['name']))){
	$user=$_SESSION['name'];
	if($user != 'admin'){
		echo "<a href='welcome.php'>BACK</a><br><br>";
	}else{ echo "<a href='admin.php'>BACK</a><br><br>";}
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	$query="SELECT * FROM users WHERE USERNAME='$user'";
	echo "<center>";
	echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>";
	echo "<B><U><font face='gabriola' color='#5E8185' size='50%'>User Profile</font></U></B>:";
	$res=mysql_query($query);
	$r=mysql_fetch_array($res);
		echo "<table border=1 frame='lhs' style='color:#5E8185;font-size:170%'>";
		echo "<tr><th align='LEFT' style='color:#5E8185'>NAME : &emsp;</th><td>".$r[0]." ".$r[1]."</td></tr><br>";
		echo "<tr><th align='LEFT'>DATE OF BIRTH : &nbsp;</th><td>".$r[2]."</td></tr><br>";
		echo "<tr><th align='LEFT'>GENDER : &emsp;</th><td>".$r[3]."</td></tr><br>";
		echo "<tr><th align='LEFT'>MOBILE : &emsp;</th><td>".$r[4]."</td></tr><br>";
		echo "<tr><th align='LEFT'>EMAIL : &emsp;</th><td>".$r[5]."</td></tr><br>";
		echo "<tr><th align='LEFT'>Username : </th><td>".$r[6]."</td></tr><br>";
		echo "<tr><th align='LEFT'>Password : </th><td>".$r[7]."</td></tr><br>";
		echo "</table></body></center>";
}else{
	echo "<script>alert('SESSION EXPIRED!!');
	window.location.href = 'login.php'; </script>";
}
?>