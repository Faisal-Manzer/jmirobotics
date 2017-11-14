<?php
include "connect.php";
$sql="DROP TABLE `album`, `but`, `eth`, `job`, `signin`, `mates`, `mess`, `meth`, `notify`, `pent`, `pics`, `prop`;";
if($conn->query($sql)===TRUE)
{
echo "drop";
}
else
{
echo $conn->error;
}
?>