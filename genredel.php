<html>
<body bgcolor="orange">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('music') or die (mysql_error());

$genre_id=$_REQUEST['genre_id'];

$result1=mysql_query("select genre_id from genre where genre_id='$genre_id'");
$row1=mysql_fetch_array($result1);

if($row1!=0)
{

$query="delete from genre where genre_id='$genre_id'";
$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully!!!!";

$var=mysql_query("SELECT * from genre");
echo"<table border size=1>";
 echo "<tr><th>  genre_id</th> <th> genre_name</th> <th> discription</th> </tr>";

while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td>  </tr>";
}
echo"</table>";
}
else{
echo"invalid genre_id !!";
}

?>
<h4><font color="crimson"><a href="genredbs.html">click here to go back to the home page </a></font></h4>
</body>
</html>