<?php
    include('../master/connect.php');


  $id = $_POST['id'];

  $sql = "SELECT * FROM members WHERE status = 1 AND (id = ?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      $fetch['address'],
      $fetch['contact'],
      $fetch['birthdate'],
      $fetch['gender']
    );
  }
$conn = null;

echo json_encode($output);
?>
