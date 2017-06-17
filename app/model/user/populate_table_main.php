<?php
    include('../master/connect.php');


  $sql = "SELECT ua_type,ua_username,ua_name,
  (CASE ua_status 
  WHEN 0 THEN 'active' 
  ELSE 'removed'  
  END ) as status 
  FROM user_account";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['ua_username'],$fetch['ua_type'],$fetch['ua_name'],
      $fetch['status']);
  }         
$conn = null;             

echo json_encode($output);
?>    