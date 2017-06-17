<?php
    include('../master/connect.php');


  $id = $_POST['id'];



  $sql = "SELECT * FROM aiqr WHERE aiqr_id = ? AND (status=0)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['aiqr_id'],
      $fetch['aiqr_class_id'],
      $fetch['active'],
      $fetch['inactive'],
      $fetch['quit_rate'],
			$fetch['aiqr_date']
      //date("m/d/Y", strtotime($fetch['aiqr_date']))      
    );
  }         
$conn = null;             

echo json_encode($output);
?>    
