<?php
require_once "../sql/connect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=htmlspecialchars(stripslashes(trim($_POST["name"])));
$email=htmlspecialchars(stripslashes(trim($_POST["email"])));
$acomm=htmlspecialchars(stripslashes(trim($_POST["acomm"])));


$sql="INSERT INTO con_com (name, email, comment)
VALUES ('".$name."', '".$email."', '".$acomm."')";
if($conn->query($sql))
{
echo $acomm."<br><span class='grey-text'>".$name."</span><br><br>";
}
else
{
echo "Oops an error occur";
}
}
else
{
header('Location: index.php');
}
?>