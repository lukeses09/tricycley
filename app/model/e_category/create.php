<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('PS'.$year);

	  $sql = "INSERT INTO equipment_categories(id,name) values(?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$name));
	  echo json_encode(0);
	  $conn = null;
}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
