<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');


	$sql = "SELECT * FROM product_categories WHERE status=1";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
     
    );
  }
$conn = null;

function GetAge($dob) {
  if($dob==null)
    return '';
  else{
    $dob=explode("-",$dob);
    $curMonth = date("m");
    $curDay = date("j");
    $curYear = date("Y");
    $age = $curYear - $dob[0];
    if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[2]))
            $age--;
    return $age;

  }
}

echo json_encode($output);
?>
