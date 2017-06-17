<?php	
    include('../master/connect.php');
		include('../../controller/master/log.php');

	$sql = "SELECT * FROM class WHERE class.status = 0";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['class_id'],$fetch['name'],$fetch['description']);
  }         
$conn = null;             

echo json_encode($output);
?>    
