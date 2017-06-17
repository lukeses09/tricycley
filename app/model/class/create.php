<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	// $description = trim(ucwords($_POST['f_description']));
	$charge = $_POST['f_charge'];
	// $duration = $_POST['f_duration'];
	$start_time = $_POST['f_start_time'];
	$end_time = $_POST['f_end_time'];
	$instructor = $_POST['f_instructor'];

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('CL'.$year);

	  $sql = "INSERT INTO classes(id,name,charge,start_time,end_time,employee_id)
		values(?,?,?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$name,$charge,$start_time,$end_time,$instructor));
	  echo json_encode(0);
	  $conn = null;
}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
