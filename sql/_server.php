<?php
/*
$servername="localhost";
$username=1142809;
$password ="aria2016";
$dbname=1142809;
*/
$connect=0;
$conn = new mysqli("localhost","u753220844_a", "Shireen","u753220844_a");
if ($conn->connect_error)
{
	die("Connection failed");
} 
else
{
$connect=1;
}

?>