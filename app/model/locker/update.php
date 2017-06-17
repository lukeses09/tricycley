<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$category = trim(ucwords($_POST['f_category']));
	$price = $_POST['f_price'];
	$id = $_POST['id'];


	  $sql = "UPDATE items
	  SET name=?,category=?, price=?,
		date_updated=?
	  WHERE id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array(
			$name,
			$category,
			$price,
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
