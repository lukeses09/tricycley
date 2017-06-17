<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	
	$id = $_POST['id'];


	  $sql = "UPDATE positions
	  SET name=?
	  WHERE id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array(
			$name,
			$id
		));
	  echo json_encode(0);

}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
