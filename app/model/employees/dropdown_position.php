<?php
    include('../master/connect.php');

//kailangan id para, ID yung masasave sa employee table
// yung name para name yung ididisplay sa dropdown, pero totoong value nun ay id

  $sql = "SELECT id, name FROM positions WHERE status = 1";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
    	$fetch['id'],
    	$fetch['name']
    );
  }         
$conn = null;             

echo json_encode($output);
?>    
