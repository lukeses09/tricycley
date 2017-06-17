<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');

	if($_SESSION["cloudipark_level"]=="admin")
		$sql = "SELECT * FROM qr 
		WHERE (status = 0) 
		ORDER BY qr.date_created desc, qr.date_updated desc";
	else if($_SESSION["cloudipark_level"]=="user")
	$sql = "SELECT * FROM qr 
		WHERE (status = 0) 
		AND (DATE(qr.date_created) = DATE(NOW())  )
		ORDER BY qr.date_created desc, qr.date_updated desc";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
    	$fetch['qr_id'],
    	$fetch['quit_rate'],
    	$fetch['qr_date']
    );
  }         
$conn = null;             

echo json_encode($output);
?>    
