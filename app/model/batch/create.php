<?php
try{

	include('../master/connect.php');

	$start = $_POST['f_start'];
	$end = $_POST['f_end'];

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('B'.$year);



	//validating
  $sql = "INSERT INTO batches(id,start,end) values(?,?,?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id,$start,$end));
  echo json_encode(0);
  $conn = null;


}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
