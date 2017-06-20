<html>
<?php
require 'connect.php';
if(isset($_GET['Id'])){
	
	//echo "i got the id";
	
	//echo $_GET['Id'];
	$id=$_GET['Id'];
	
	$sql = "SELECT * FROM req where Id='$id'";
	$result = $db->query($sql);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result)){
		?>Name:<?php echo $row['Username'];
		?><br />Type:<?php echo $row['Type'] ;
	}
	
	echo '<br /><a href="showresult.php"><input type="button" style="width:50px;height:50px" value="return" onclick="showresult.php" /><a />';
	
}else{
	echo "no result";
}
}else{
	
	
	header("Location:showresult.php");
}


?>

</html>