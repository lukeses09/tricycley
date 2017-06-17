<?php
    include('../master/connect.php');


  $sql = "SELECT * FROM lockers WHERE id = 1";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      ($fetch['row'].","$fetch['col']),
      $fetch['name']
    );
  }
$conn = null;

echo json_encode($output);
?>
