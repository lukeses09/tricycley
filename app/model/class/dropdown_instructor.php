<?php
    include('../master/connect.php');


  $sql = "SELECT DISTINCT id, name FROM employees WHERE status = 1";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['id'], $fetch['name']);
  }
$conn = null;

echo json_encode($output);
?>
