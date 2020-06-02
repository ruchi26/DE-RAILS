<?php
session_start();
if($_SESSION['name']=='admin'){
	$tno=$_POST['tno'];
	$tname=$_POST['tname'];
	$source=$_POST['source'];
	$destination=$_POST['destination'];
	$departure=$_POST['departure'];
	$arrival=$_POST['arrival'];
	$seats=$_POST['seats'];
	$fare=$_POST['fare'];
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	$query2="SELECT * FROM trains WHERE TNUM='$tno'";
	$res2=mysql_query($query2);
	if(mysql_num_rows($res2) == 0){
		$query="INSERT INTO trains VALUES('$tno','$tname','$source','$destination','$departure','$arrival','$seats','$fare')";
		mysql_query($query);
		echo "<script>alert('TRAIN Added');
		window.location.href = 'admin.php'; </script>";
	}else{
		echo "<script>alert('Train no. already taken');
		window.location.href = 'trainadd.php'; </script>";
	}
}else{
	echo "<script>alert('SESSION EXPIRED');
	window.location.href = 'login.php'; </script>";
}
?>