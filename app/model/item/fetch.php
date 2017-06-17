<?php
    include('../master/connect.php');


  $id = $_POST['id'];

  $sql = "SELECT * FROM products WHERE status = 1 AND (id = ?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
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
