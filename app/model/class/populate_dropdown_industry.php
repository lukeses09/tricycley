<?php
    include('../master/connect.php');


  $sql = "SELECT DISTINCT sup_industry FROM supplier WHERE sup_status = 0";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['sup_industry']);
  }         
$conn = null;             

echo json_encode($output);
?>    