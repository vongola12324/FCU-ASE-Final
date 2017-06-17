
<?php
require 'connect.php';
if(!empty($_POST)){
$user='root';
$pass='';
$db='testdb';
$conn=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
}

$sql = "SELECT * FROM req ORDER BY Id ASC";
	$result = $db->query($sql);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result)){
		 $id= $row['Id'] ;
	}
	}
	$id=$id+1;
	/*echo "$id";*/

echo "<form method='post' action='addprocess.php?Id=$id'>";
echo "Name:<input name='name' type='text'><br />";
echo "Title:<input name='title' type='text'><br />";
echo "Type:<input name='type' type='text'><br />";
echo "<input type='submit' value='process'>";	
echo "</form>";
?>