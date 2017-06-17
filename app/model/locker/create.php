<?php
try{

	include('../master/connect.php');

	$name = trim(ucwords($_POST['f_name']));
	$description = trim(ucwords($_POST['f_description']));
	$row = $_POST['f_row'];
	$col = $_POST['f_col'];

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('LG'.$year);

	  $sql = "INSERT INTO locker_groups(id,name,description,row,col) values(?,?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$name,$description,$row,$col));

		for($o=1; $o<=$row; $o++){
			for($i=1; $i<=$col; $i++){
				$locker_id = uniqid('LK'.$year);
			  $sql = "INSERT INTO lockers(id,locker_groups_id,description) values(?,?,?)";
			  $q = $conn->prepare($sql);
			  $q -> execute(array($locker_id,$id,$o.",".$i));
			}
		}

	  echo json_encode(0);
	  $conn = null;
}

catch(PDOException $x) {
echo json_encode(1);
}
$conn = null;
?>
