<?php
    include('../master/connect.php');


  $sql = "SELECT DISTINCT category FROM items WHERE status = 1";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['category']);
  }
$conn = null;

echo json_encode($output);
?>
