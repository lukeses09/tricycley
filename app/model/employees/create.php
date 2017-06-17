<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$address = trim(ucwords($_POST['f_address']));
	$contact = $_POST['f_contact'];
	$position = $_POST['f_position'];
	$birthdate =  date('Y-m-d', strtotime(str_replace('-', '/', $_POST['f_birthdate'])));

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('MB'.$year);


	  $sql = "INSERT INTO employees(id,name,address,contact,positions_id,birthdate) values(?,?,?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$name,$address,$contact,$position,$birthdate,));
	  echo json_encode(0);
	  $conn = null;
}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
