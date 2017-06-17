<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');

	if($_SESSION["cloudipark_level"]=="admin")
		$sql = "SELECT * FROM gpm WHERE (status = 0) ORDER BY gpm.date_created desc, gpm.date_updated desc";
	else if($_SESSION["cloudipark_level"]=="user")
		$sql = "SELECT * FROM gpm WHERE (status = 0) AND (DATE(date_created) = DATE(NOW())  ) ORDER BY gpm.date_created desc, gpm.date_updated desc";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
    	$fetch['gpm_id'],
    	$fetch['gross'],
    	$fetch['net'],
    	$fetch['gpm'],
    	$fetch['gpm_date']
    );
  }         
$conn = null;             

echo json_encode($output);
?>    
