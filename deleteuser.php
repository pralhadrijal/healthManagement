<?php 


include('dbconn.php');

$id=$_GET['id'];

 $sql = "DELETE FROM user WHERE id='$id'";
$result = $conn->query($sql);
if ($result) {
	header('location:usermanager.php');
}
else {
	echo "error";
}

 ?>