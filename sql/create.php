<?php
include "connect.php";

$sql = "CREATE TABLE con_com (
sno INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
comment VARCHAR(1000),
toc timestamp
)";

if($conn->query($sql)===TRUE)
{
	echo "<br>Table con_com created successfully<br>";
}
else
{
echo "<br>Error creating con_com: " . $conn->error."<br>";
}






?>