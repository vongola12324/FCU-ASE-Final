<?php
$Id = $_GET['Id'];
//echo $id;
?>


<?php
$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost', $user, $pass, $db) or die('Unable to connect');
$Name = $_POST['name'];
$Title = $_POST['title'];
$Type = $_POST['type'];

$sql = "insert into req (Id,Title,Username,Type) values ('$Id','$Title','$Name','$Type')";
//$sql = "UPDATE req SET Title='$Title',Type='$Type' WHERE Id='$id'";

if (!mysqli_query($db, $sql)) {
    echo 'Not added';
} else {
    echo 'added Successfully';
}

header('refresh:2; url=showresult.php');

?>﻿