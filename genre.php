<html>

<body bgcolor="orange">
<?php
   
   $dbh = mysql_connect('localhost','root','') or die(mysql_error());
    mysql_selectdb('music') or die(mysql_error());
      $genre_id=$_REQUEST['genre_id'];
       $genre_name=$_REQUEST['genre_name'];
      $discription=$_REQUEST['discription'];

$query = "INSERT INTO genre VALUES ('$genre_id','$genre_name','$discription')";
$result = mysql_query($query) or  die(mysql_error());

echo "data inserted sucessfully";

$var = mysql_query("SELECT * FROM genre");

 echo "<table border size=1>";
 echo "<tr><th>  genre_id</th> <th> genre_name</th> <th> discription</th> </tr>";

while ($arr=mysql_fetch_row($var))
{
 echo"<tr> <td> $arr[0] </td> <td> $arr[1]  </td> <td> $arr[2]  </td>  </tr>";

}
echo"</table>";

$db_host="localhost";
$db_name="music";
$db_user="root";
$db_pass="";

$con = mysql_connect("$db_host","$db_user","$db_pass") or die ("couldnot connect");

mysql_select_db('music') or die(mysql_error());

mysql_close($con); 


?>

<h4><font color="cyan"><a href="albumdbs.html">click here to go back to the home page </a></font></h4
</body>
</html>