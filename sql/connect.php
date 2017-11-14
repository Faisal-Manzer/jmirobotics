<?php
/*
$servername="localhost";
$username=1142809;
$password ="aria2016";
$dbname=1142809;
*/
$connect=0;
$conn = new mysqli("localhost","1054337", "robosquad","1054337");
if ($conn->connect_error)
{
echo "failed";
	die("Connection failed");
	
} 
else
{
$connect=1;
}

?>