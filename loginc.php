<?php
$user=$_POST['username'];
$pass=$_POST['password'];
if($user=="" || $pass==""){
	echo "Fill all fields";
}else{
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	$query="SELECT * FROM users WHERE USERNAME='$user' AND PASSWORD='$pass'";
	$res=mysql_query($query);
	$count=mysql_num_rows($res);
	if($count == 0){
		echo "<script>alert('INCORRECT USERNAME OR PASSWORD');
	window.location.href = 'login.php'; </script>";
	}else{
		session_start();
		$_SESSION['name']=$user;
		if($user == "admin"){		
			header("location:admin.php");
		}else{
			header("location:welcome.php");
		}
	}
}
?>