<html>
<body bgcolor="orange" >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('music') or die (mysql_error());

$album_id=$_REQUEST['album_id'];

$result1=mysql_query("select album_id from album where album_id='$album_id'");
$row1=mysql_fetch_array($result1);

if($row1!=0)
{

$query="delete from album where album_id='$album_id'";
$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully!!!!";


$var=mysql_query("SELECT * from album");
echo"<table border size=1>";
 echo "<tr><th>  album_id</th> <th> artist_id</th> <th> album_name</th> <th> release_date </th> <th> genre_id</th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td> <td>$arr[4]</td> </tr>";
}
echo"</table>";
}
else{
echo"invalid album_id !!";
}
?>
<h4><font color="cyan"><a href="albumdbs.html">click here to go back to the home page </a></font></h4>
</body>
</html>