<html>

<body bgcolor=orange >
<?php
   
   $dbh = mysql_connect('localhost','root','') or die(mysql_error());
    mysql_selectdb('music') or die(mysql_error());
      $song_id=$_REQUEST['song_id'];
       $language=$_REQUEST['language'];
      $rating=$_REQUEST['rating'];
         $album_id=$_REQUEST['album_id'];

$query = "INSERT INTO song VALUES ('$song_id','$language','$rating','$album_id')";
$result = mysql_query($query) or  die(mysql_error());

echo "data inserted sucessfully";

$var = mysql_query("SELECT * FROM song");

 echo "<table border size=1>";
 echo "<tr><th>  song_id</th> <th>language</th> <th> rating</th>  <th> album_id</th>  </tr>";

while ($arr=mysql_fetch_row($var))
{
 echo"<tr> <td> $arr[0] </td> <td> $arr[1]  </td> <td> $arr[2]  </td> <td> $arr[3]  </td>  </tr>";

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

<h4><font color="cyan"><a href="songdbs.html">click here to go back to the home page </a></font></h4
</body>
</html>