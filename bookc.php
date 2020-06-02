<?php
$source=$_POST['source'];
$destination=$_POST['destination'];
mysql_connect("localhost","root","");
mysql_select_db("irctc_users");

$query="SELECT * FROM trains WHERE SOURCE='$source' AND DESTINATION='$destination'";
$res=mysql_query($query);
echo "<html>";
echo "<body link='#5E8185' vlink='#5E8185' style='background:url(city.jpg);
background-repeat:no-repeat;background-size:100% 100%'>";
echo "<a href='book.php'>BACK</a><br>";
echo "<center>";
echo "<table border=2 style='color:#5E8185;font-size:100%;font-family:gabriola'>";
echo "<br><tr><th>Train No.</th><th>Train Name</th><th>Source</th>
<th>Destination</th><th>Available Seats</th><th>Time of Arrival</th>
<th>Time of Departure</th></tr>";
while($r=mysql_fetch_array($res)){
echo "<tr>
<td>".$r[0]."</td>
<td>".$r[1]."</td>
<td>".$r[2]."</td>
<td>".$r[3]."</td>
<td>".$r[4]."</td>
<td>".$r[5]."</td>
<td>".$r[6]."</td>
</tr>";
}
echo "</table><br><br><br>";
$res1=mysql_query($query);
echo "<form method='POST' action='book1.php'><br><font color='#5E8185'>
Enter Train No. :  </font><select name='tno' id='tno' size='1'>";

while($s=mysql_fetch_array($res1)){
	echo "<option>".$s[0]."</option>";
}
echo "</select>";
echo "&ensp;<input type='submit' name='ch' value='Check Seats'><br><br>
</form>";
echo "</font></html>";


?>