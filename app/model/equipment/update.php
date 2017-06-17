<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$category = trim(ucwords($_POST['f_category']));
	$price = $_POST['f_price'];
	$no_items = $_POST['f_no_items'];
	$id = $_POST['id'];


	  $sql = "UPDATE equipments
	  SET name=?, price=?, ecategories_id=?, no_items=?,
		date_updated=?
	  WHERE id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array(
			$name,
			$price,
			$category,
			$no_items,
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
