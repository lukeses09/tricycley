<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$address = trim(ucwords($_POST['f_address']));
	$contact_person = trim(ucwords($_POST['f_contact_person']));
	$contact_no = trim(ucwords($_POST['f_contact_no']));
	$id = $_POST['id'];


	  $sql = "UPDATE suppliers
	  SET name=?, address=?, contact_person=?, contact_no=?
	  WHERE id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array(
			$name,
			$address,
			$contact_person,
			$contact_no,
			$id
		));
	  echo json_encode(0);

}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
