<?php
    include('../master/connect.php');


  $id = $_POST['id'];



  $sql = "SELECT * FROM gpm WHERE gpm_id = ? AND (status=0)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['gpm_id'],
      $fetch['gross'],
      $fetch['net'],
      $fetch['gpm'],
			$fetch['gpm_date']
      //date("m/d/Y", strtotime($fetch['gpm_date']))      
    );
  }         
$conn = null;             

echo json_encode($output);
?>    
