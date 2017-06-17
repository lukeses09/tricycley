<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');

	if($_SESSION["cloudipark_level"]=="admin")
		$sql = "SELECT aiqr_id, class.name as name, active, inactive, quit_rate, aiqr_date 
		FROM aiqr, class 
		WHERE (aiqr.status = 0)
		AND (aiqr_class_id = class.class_id)
		GROUP BY (aiqr_id) 
		ORDER BY aiqr.date_created desc, aiqr.date_updated desc";
	if($_SESSION["cloudipark_level"]=="user")
 		$sql = "SELECT aiqr_id, class.name as name, active, inactive, quit_rate, aiqr_date 
		FROM aiqr, class 
		WHERE (aiqr.status = 0)
		AND (aiqr_class_id = class.class_id)
		AND (DATE(aiqr.date_created) = DATE(NOW())  )
		GROUP BY (aiqr_id) 
		ORDER BY aiqr.date_created desc, aiqr.date_updated desc";
 $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
    	$fetch['aiqr_id'],
    	$fetch['name'],
    	$fetch['active'],
    	$fetch['inactive'],
    	$fetch['quit_rate'],
    	$fetch['aiqr_date']
    );
  }         
$conn = null;             

echo json_encode($output);
?>    
