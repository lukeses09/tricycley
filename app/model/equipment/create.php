<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$item = $_POST['f_no_items'];
	$category = trim(ucwords($_POST['f_category']));
	$price = $_POST['f_price'];
	

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('IT'.$year);

	  $sql = "INSERT INTO equipments(id,name,no_items,ecategories_id,price) values(?,?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$name,$item,$category,$price,));
	  echo json_encode(0);
	  $conn = null;
}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
