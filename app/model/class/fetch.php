<?php
    include('../master/connect.php');


  $id = $_POST['id'];

  $sql = "SELECT * FROM classes WHERE status = 1 AND (id = ?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      // $fetch['description'],
      // $fetch['duration'],
      $fetch['charge'],
      $fetch['start_time'],
      $fetch['end_time'],
      $fetch['employee_id']
    );
  }
$conn = null;

echo json_encode($output);
?>
