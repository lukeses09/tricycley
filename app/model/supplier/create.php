<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$address = trim(ucwords($_POST['f_address']));
	$contact_person = trim(ucwords($_POST['f_contact_person']));
	$contact_no = trim(ucwords($_POST['f_contact_no']));
    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('PS'.$year);

	   $sql = "INSERT INTO suppliers(id,name,address,contact_person,contact_no) values(?,?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$name,$address,$contact_person,$contact_no));
	  echo json_encode(0);
	  $conn = null;
}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
