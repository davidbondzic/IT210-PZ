<?php
	require_once('konekcija.php');
	$con = povezi();
	$id = $_GET['id'];
	
	$stmt = $con->prepare("DELETE FROM kamere WHERE kamera_id=:id");
	$stmt->bindParam(":id", $id);
	$data = $stmt->execute();
	
	if($data){
		echo "Uspeh";
		header("Location: kamere.php");
	}
	else{
		echo "Greska";
	}

?>