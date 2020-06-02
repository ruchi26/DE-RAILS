<?php
session_start();
if($_SESSION['name']=='admin'){
	$x=$_POST['x'];
	$pnum=$_POST['pnum'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	$q2="SELECT * FROM users WHERE USERNAME='$x'";
	$res2=mysql_query($q2);
	if(mysql_num_rows($res2) != 0){
		$q1="SELECT * FROM users WHERE USERNAME='$user'";
		$res=mysql_query($q1);
		if(mysql_num_rows($res) == 0){
			$query="UPDATE users SET MOB='$pnum' WHERE USERNAME='$x'";
			mysql_query($query);
			$query1="UPDATE users SET EMAIL='$email' WHERE USERNAME='$x'";
			mysql_query($query1);
			$query2="UPDATE users SET PASSWORD='$pass' WHERE USERNAME='$x'";
			mysql_query($query2);
			$query3="UPDATE users SET USERNAME='$user' WHERE USERNAME='$x'";
			mysql_query($query3);
	
			echo "<script>alert('User Profile Modified!!');
			window.location.href = 'admin.php'; </script>";
		}else{
			echo "<script>alert('USERNAME ALREADY  TAKEN!!');
			window.location.href = 'usermod.php'; </script>";
		}
	}else{
		echo "<script>alert('USER DOES NOT EXIST!!');
		window.location.href = 'usermod.php'; </script>";
	}
}else{
		echo "<script>alert('SESSION EXPIRED');
		window.location.href = 'login.php'; </script>";
}

?>