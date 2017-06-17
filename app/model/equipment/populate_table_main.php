<?php
    include('../master/connect.php');
    include('../../controller/master/log.php');


  $sql = "SELECT e.id as id,e.name as name, e.no_items as no_items,
  e.price as charge,  ec.name as category
  FROM equipments e, equipment_categories ec
  WHERE e.status=1 AND (e.ecategories_id = ec.id)
  GROUP BY e.id";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      $fetch['no_items'],
      $fetch['charge'],
      $fetch['category'],


    );
  }
$conn = null;

echo json_encode($output);
?>
