<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$category = trim(ucwords($_POST['f_category']));
	$price = $_POST['f_price'];
	$item = $_POST['f_noitems'];

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('IT'.$year);

	  $sql = "INSERT INTO products(id,name,no_items,price) values(?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$name,$no_items,$price));
	  echo json_encode(0);
	  $conn = null;
}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
