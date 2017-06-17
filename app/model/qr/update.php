<?php
try{

	include('../master/connect.php');

	$date =  date('Y-m-d', strtotime(str_replace('-', '/', $_POST['f_date'])));
	$quit_rate = $_POST['f_quit_rate'];

	$id = $_POST['id'];    


	  $sql = "UPDATE qr 
	  SET quit_rate=?,qr_date=?,date_updated=?
	  WHERE qr_id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($quit_rate,$date,date("Y-m-d H:i:s"),$id));
	  echo json_encode(0); 		  

}

catch(PDOException $x) {
echo json_encode(1); 		
}
$conn = null;             
?>    