<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$no_items = $_POST['f_no_items'];
	$price = $_POST['f_price'];
	$id = $_POST['id'];


	  $sql = "UPDATE products
	  SET name=?,no_items=?, price=?,
		date_updated=?
	  WHERE id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array(
			$name,
			$no_items,
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
