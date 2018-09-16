<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","");
if (!$con){die('Could not connect: ' . mysql_error());}
mysqli_select_db($con,"test");
$query = "SELECT ID,Sex FROM injection WHERE NAME = '$id'; ";
$result = mysqli_query($con,$query)or die('<pre>'.mysqli_error($con).'</pre>');
while($row = mysqli_fetch_array($result))
{ 
echo $row['0'] . "&nbsp" . $row['1']; 
echo "<br />";}echo "<br/>";echo $query;

mysqli_close($con);
?>