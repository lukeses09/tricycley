<?php
    include('../master/connect.php');


  $id = $_POST['id'];

  $sql = "SELECT * FROM employees WHERE status = 1 AND (id = ?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      $fetch['address'],
      $fetch['birthdate'],
      $fetch['contact'],
      $fetch['positions_id']
    );
  }
$conn = null;

echo json_encode($output);
?>
