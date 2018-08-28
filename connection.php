<?php
$user="username";
$host="localhost";
$password=" ";
$db_name="TelecomOperator";

$conn=mysqli_connect($host,$user,$password,$db_name);
if(!$conn)
{
		echo"Cannot connect to the server";
}


?>