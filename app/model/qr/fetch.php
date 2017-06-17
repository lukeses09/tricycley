<?php
    include('../master/connect.php');


  $id = $_POST['id'];



  $sql = "SELECT * FROM qr WHERE qr_id = ? AND (status=0)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['qr_id'],
      $fetch['quit_rate'],
			$fetch['qr_date']
      //date("m/d/Y", strtotime($fetch['qr_date']))      
    );
  }         
$conn = null;             

echo json_encode($output);
?>    
