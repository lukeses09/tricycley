<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');


	$sql = "SELECT * FROM locker_groups WHERE status=1";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      $fetch['description'],
      $fetch['row'],
      $fetch['col'],
    );
  }
$conn = null;

echo json_encode($output);
?>
