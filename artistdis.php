<html>
<body bgcolor="orange" >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('music') or die (mysql_error());

$var=mysql_query("SELECT * from artist");
echo"<table border size=1>";
echo "<tr><th>  artist_id</th> <th>  artist_name</th> <th> address</th> <th>  phn_no </th> <th> gender</th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td> <td>$arr[4]</td> </tr>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="artistdbs.html">click here to go back to the home page </a></font></h4>
</body>
</html>