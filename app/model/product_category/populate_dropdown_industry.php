<?php
    include('../master/connect.php');


  $sql = "SELECT name FROM product_categories WHERE status = 1";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['name']);
  }         
$conn = null;             

echo json_encode($output);
?>    