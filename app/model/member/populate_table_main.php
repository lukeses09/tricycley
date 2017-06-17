<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');

	$sql = "SELECT * FROM members WHERE status = 1";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      $fetch['address'],
      $fetch['contact'],
      $fetch['birthdate'],
      $fetch['gender']
    );
  }
$conn = null;

echo json_encode($output);
?>
