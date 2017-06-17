<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$address = trim(ucwords($_POST['f_address']));
	$gender = trim($_POST['f_gender']);
	$birthdate =  date('Y-m-d', strtotime(str_replace('-', '/', $_POST['f_birthdate'])));
	$contact = trim($_POST['f_contact']);

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('M'.$year);

	  $sql = "INSERT INTO members(id,name,address,contact,birthdate,gender) values(?,?,?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$name,$address,$contact,$birthdate,$gender));
	  echo json_encode(0);
	  $conn = null;
}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
