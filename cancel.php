<?php
session_start();
if(isset($_SESSION['name'])){
	$user=$_SESSION['name'];
	$pnr=$_POST['can'];
	mysql_connect("localhost","root","");
	mysql_select_db("irctc_users");
	$query1="SELECT * FROM user_book WHERE PNR='$pnr'";
	$res=mysql_fetch_array(mysql_query($query1));
	$a=$res[8];
	$b=$res[2];
	$query3="UPDATE trains SET ASEATS=ASEATS+'$a' WHERE TNUM='$b'";
	mysql_query($query3);
	$query4="DELETE FROM user_book WHERE PNR='$pnr'";
	mysql_query($query4);	
	echo "<script>alert('Cancellation Successful!!');
	window.location.href = 'booked.php'; </script>";

}else{
	echo "<script>alert('SESSION EXPIRED!!');
	window.location.href = 'login.php'; </script>";
}

?>