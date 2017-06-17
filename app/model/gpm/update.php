<?php
try{

	include('../master/connect.php');

	$date =  date('Y-m-d', strtotime(str_replace('-', '/', $_POST['f_date'])));
	$gross = $_POST['f_gross'];
	$net = $_POST['f_net'];
	$gpm = ($net/$gross)*100;
	$id = $_POST['id'];    


	  $sql = "UPDATE gpm 
	  SET gross=?,net=?,gpm=?,gpm_date=?,date_updated=?
	  WHERE gpm_id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($gross,$net,$gpm,$date,date("Y-m-d H:i:s"),$id));
	  echo json_encode(0); 		  

}

catch(PDOException $x) {
echo json_encode(1); 		
}
$conn = null;             
?>    