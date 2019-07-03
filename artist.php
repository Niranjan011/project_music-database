<html>

<body bgcolor="orange">
<?php
   
   $dbh = mysql_connect('localhost','root','') or die(mysql_error());
    mysql_selectdb('music') or die(mysql_error());
      $artist_id=$_REQUEST['artist_id'];
       $artist_name=$_REQUEST['artist_name'];
      $address=$_REQUEST['address'];
       $phn_no=$_REQUEST['phn_no'];
   $gender=$_REQUEST['gender'];

$query = "INSERT INTO artist VALUES ('$artist_id','$artist_name','$address','$phn_no',' $gender')";
$result = mysql_query($query) or  die(mysql_error());

echo "data inserted sucessfully";

$var = mysql_query("SELECT * FROM artist");

 echo "<table border size=1>";
 echo "<tr><th> artist_id</th> <th>  artist_name</th> <th>  address</th> <th>  phn_no </th> <th> gender</th> </tr>";

while ($arr=mysql_fetch_row($var))
{
 echo"<tr> <td> $arr[0] </td> <td> $arr[1]  </td> <td> $arr[2]  </td> <td> $arr[3]  </td> <td> $arr[4] </td> </tr>";

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

<h4><font color="cyan"><a href="artistdbs.html">click here to go back to the home page </a></font></h4>
</body>
</html>