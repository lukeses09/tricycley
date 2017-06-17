<?php
    include('../master/connect.php');


  $id = $_POST['id'];

  $sql = "SELECT * FROM equipments WHERE status = 1 AND (id = ?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      $fetch['ecategories_id'],
      $fetch['price'],
      $fetch['no_items']
    );
  }
$conn = null;

echo json_encode($output);
?>
