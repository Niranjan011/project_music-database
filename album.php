<html>

<body bgcolor="orange">
<?php
   
   $dbh = mysql_connect('localhost','root','') or die(mysql_error());
    mysql_selectdb('music') or die(mysql_error());
       
      $album_id=$_REQUEST['album_id'];
      $artist_id=$_REQUEST['artist_id'];	
      $album_name=$_REQUEST['album_name'];
      $censored_date=$_REQUEST['censored_date'];
      $genre_id=$_REQUEST['genre_id'];
      $no_of_songs=$_REQUEST['no_of_songs'];	
      $release_date=null;

$query = "INSERT INTO album VALUES ('$album_id','$artist_id','$album_name','$censored_date','$release_date','$genre_id','$no_of_songs')";
$result = mysql_query($query) or  die(mysql_error());

echo "data inserted sucessfully";

$var = mysql_query("SELECT  *  FROM album");

 echo "<table border size=1>";
 echo "<tr><th>  album_id</th> <th> artist_id</th> <th> album_name</th>  <th> censored_date </th><th> release_date </th> <th> genre_id</th> <th> no_of_songs</th> </tr>";

while ($arr=mysql_fetch_row($var))
{
 echo"<tr> <td> $arr[0] </td> <td> $arr[1]  </td> <td> $arr[2]  </td> <td> $arr[3]  </td>  <td> $arr[4]  </td>  <td> $arr[5]  </td><td> $arr[6]  </td></tr>";

}
echo"</table>";
?>

<?php

$db_host="localhost";
$db_name="project";
$db_user="root";
$db_pass="";
$con = mysql_connect("$db_host","$db_user","$db_pass") or die ("could not connect");
mysql_select_db('music') or die(mysql_error());
$p0=mysql_query("call total_songs(@out);");
$rs=mysql_query( 'SELECT @out' );

while($row=mysql_fetch_row($rs))
{
echo 'total number of songs is= '.$row[0];
}


mysql_close($con);


?>

<h4><font color="cyan"><a href="albumdbs.html">click here to go back to the home page </a></font></h4
</body>
</html>