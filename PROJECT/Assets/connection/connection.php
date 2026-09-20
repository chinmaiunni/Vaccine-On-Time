<?php
$server="localhost";
$user="root";
$password="";
$db="db_vaccine";
$con=mysqli_connect($server,$user,$password,$db);
if(!$con)
{
	echo"connection failed";
}
?>