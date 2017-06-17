<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$address = trim(ucwords($_POST['f_address']));
	$gender = trim($_POST['f_gender']);
	$birthdate =  date('Y-m-d', strtotime(str_replace('-', '/', $_POST['f_birthdate'])));
	$contact = trim($_POST['f_contact']);
	$id = $_POST['id'];


	  $sql = "UPDATE members
	  SET
		name=?,
		address=?,
		contact=?,
		birthdate=?,
		gender=?,
		date_updated=?
	  WHERE id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array(
			$name,
			$address,
			$contact,
			$birthdate,
			$gender,
			date("Y-m-d H:i:s"),
			$id
		));
	  echo json_encode(0);

}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
