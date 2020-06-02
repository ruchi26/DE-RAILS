<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$pnum=$_POST['pnum'];
$gender=$_POST['gender'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
mysql_connect("localhost","root","");
mysql_select_db("irctc_users");
$q1="SELECT * FROM users WHERE USERNAME='$user'";
$res=mysql_query($q1);
if(mysql_num_rows($res) == 0){
$query="INSERT INTO users(FNAME, LNAME, DOB, GENDER, MOB, EMAIL, USERNAME,PASSWORD)VALUES('$fname','$lname','$dob','$gender','$pnum','$email','$user','$pass')";
mysql_query($query);
echo "Registration complete. Please login to continue";
header("location:login.php");
}else{
	echo "<script>alert('USERNAME ALREADY TAKEN!!');
	window.location.href = 'register.php'; </script>";
}


?>