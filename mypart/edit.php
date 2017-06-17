<html>
<?php
$id=$_GET['Id'];
if(!empty($_POST)){
$user='root';
$pass='';
$db='testdb';
$conn=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");


echo "$id";}
/*
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=name;
/*
$sql = "UPDATE req SET Type='food' WHERE Id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}*/
?>
<?php
echo "<form method='post' action='process.php?Id=$id'>";
echo "Title:<input name='title' type='text'><br />";
echo "Type:<input name='type' type='text'><br />";
echo "<input type='submit' value='process'>";	
echo "</form>";?>
</html>