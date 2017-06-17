<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');

	$sql = "SELECT * FROM batches WHERE (status = 1)";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
    	$fetch['id'],
    	$fetch['start'],
    	$fetch['end'],
    	$fetch['status']
    );
  }
$conn = null;

echo json_encode($output);
?>
