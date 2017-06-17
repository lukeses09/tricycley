<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');


	$sql = "SELECT * FROM products WHERE status=1";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      $fetch['no_items'],
      $fetch['price'],
    );
  }
$conn = null;

echo json_encode($output);
?>
