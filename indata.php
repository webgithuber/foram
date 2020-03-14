<?php
$con =mysqli_connect('localhost','mysqluser2','mysqluser20202');
if(!$con)
{echo "not connected";}
else
{	echo "connected";}
$name = $_GET["user"];
$email = $_GET["mail"];
$branch = $_GET["branch"];
mysqli_select_db($con,'college');
$sql ="INSERT INTO PLAYGROUND(NAME,EMAIL,BRANCH) VALUES('$name','$email','$branch')";
if(mysqli_query($con,$sql))
{echo "inserted";}
echo $name;

header("refresh:0;url=form.php");

?>
