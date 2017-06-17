<?php
    include('../master/connect.php');
		include('../../controller/master/log.php');


	$sql = "SELECT e.id, e.name, e.address, e.birthdate, e.contact, p.name as position
FROM employees e, positions p
WHERE e.positions_id = p.id AND e.status = 1
GROUP BY e.id";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array (
      $fetch['id'],
      $fetch['name'],
      $fetch['address'],
      $fetch['birthdate'],
      GetAge($fetch['birthdate']),
      $fetch['contact'],
      $fetch['position'],
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
