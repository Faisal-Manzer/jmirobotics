<?php
require_once "../sql/connect.php";
if($_SERVER["REQUEST_METHOD"]=="GET"){
if($_GET["q"]>=0)
{
$off=$_GET["q"]*5;
$sql="SELECT name, comment, toc FROM con_com ORDER BY toc DESC LIMIT 5 OFFSET ".$off;
$result=$conn->query($sql);
#echo $conn->error;
$tte="";
$cp=0;
$ti=$_GET["q"]*5;
$mti=($_GET["q"]+1)*5;
echo "<blockquote id='com_b'>";
if($result->num_rows>0){
while($row=$result->fetch_assoc())
{
/*
if($ti>$cp)
{
$cp++;
continue;
}
if(($ti<=$cp)&&($mti>$cp)){
*/
$tte.=$row["comment"]."<br><span class='grey-text'>".$row["name"]."</span><br><br>";
/*
}
if($cp>=$mti)
{
break;
}
$cp++;
*/
}
}
else
{
echo "Nothing to show";
}
echo $tte."</blockquote>";
$conn->close();
echo "</div>";
}
else
{
echo "";
}
}
else
{
header('Location: index.php');
}
?>