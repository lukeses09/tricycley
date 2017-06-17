<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$address = trim(ucwords($_POST['f_address']));
	$contact = $_POST['f_contact'];
	$position = $_POST['f_position'];
	$birthdate =  date('Y-m-d', strtotime(str_replace('-', '/', $_POST['f_birthdate'])));
	$id = $_POST['id'];


	  $sql = "UPDATE employees
	  SET name=?,address=?, contact=?, birthdate=?,
		date_updated=?, positions_id=?
	  WHERE id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array(
			$name,
			$address,
			$contact,
			$birthdate,
			date("Y-m-d H:i:s"),
			$position,
			$id
		));
	  echo json_encode(0);

}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
