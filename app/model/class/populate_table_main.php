<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');


	$sql = "SELECT c.id as id,c.name as name, 
  c.charge as charge, c.start_time as start_time, c.end_time as end_time, e.name as instructor
  FROM classes c, employees e
  WHERE c.status=1 AND (c.employee_id = e.id)
  GROUP BY c.id";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      $fetch['charge'],
      ($fetch['start_time']."-".$fetch['end_time']),
      $fetch['instructor']
    );
  }
$conn = null;

echo json_encode($output);
?>
