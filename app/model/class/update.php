<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	// $description = trim(ucwords($_POST['f_description']));
	$charge = $_POST['f_charge'];
	$start_time = $_POST['f_start_time'];
	$end_time = $_POST['f_end_time'];
	$instructor = $_POST['f_instructor'];
	// $duration = $_POST['f_duration'];

	$id = $_POST['id'];


	  $sql = "UPDATE classes
	  SET name=?, charge=?, start_time=?, end_time=?, 
	 employee_id=?, date_updated=?
	  WHERE id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array(
			$name,
			$charge,
			$start_time,
			$end_time,
			$instructor,
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
