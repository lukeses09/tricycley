<?php
try{

	include('../master/connect.php');

	$id = $_POST['id'];

	// $id = uniqid('');

	  $sql = "UPDATE user_account SET ua_status = ? WHERE ua_username LIKE ?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array('1',$id));
	  $output=0;
	$conn = null;             

echo json_encode(0); 	
}

catch(PDOException $x) {
echo json_encode(1); 		
}


?>    