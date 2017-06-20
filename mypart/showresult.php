<html>
<?php

require 'connect.php';

if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    //echo "$id";
    $del = "DELETE FROM req WHERE Id='$id'";
    $conn = mysqli_query($db, $del);
    /*if (!mysqli_query($db,$del))
    {
        echo 'Delete failed';
    }

    else
    {
        echo 'Delete Successfully';
    }*/
}

/*$sql="select * from req";
$result =mysqli_query($dbc,$sql)or die("Bad Query:$sql");*/

//mysqli_select_db($db,"req");

$sql = 'SELECT * FROM req';
$result = $db->query($sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<div><a href='details.php?Id={$row['Id']}'>{$row['Title']}<a href='edit.php?Id={$row['Id']}'></div>";

        echo "<div><img src='edit-button-hi.png' alt='edit' width='30' height='30'></a>";
        echo "<a href='details.php?Id={$row['Id']}'><a href='showresult.php?Id={$row['Id']}'>"; ?>
			<img src="red_x_cross_wrong_not_clip_art.jpg" alt="delete" width="30" height="30"></a><br /><br/>
		<?php
        echo '</div>';
    }
} else {
    echo 'no result';
}

echo '<br /><a href="addnewevent.php"><input type="button" style="width:120px;height:30px" value="add_new_event" onclick="addnewevent.php" /><a />';
?>

</html>