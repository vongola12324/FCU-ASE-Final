<?php
$id=$_GET['Id'];
//echo $id;
?>


<?php
$user='root';
$pass='';
$db='testdb';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
$Title = $_POST['title'];
$Type = $_POST['type'];


//$sql = "insert into person (Name,Email) values ('$Name','$Email')";
$sql = "UPDATE req SET Title='$Title',Type='$Type' WHERE Id='$id'";

if (!mysqli_query($db,$sql))
{
 echo 'Not Inserted';
}

else
{
 echo 'Inserted Successfully';
}

header("refresh:2; url=showresult.php");


?>﻿