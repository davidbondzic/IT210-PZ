<?php
	require_once('konekcija.php');
	$con = povezi();
	$id = $_GET['id'];
	
	$stmt = $con->prepare("DELETE FROM tehnika WHERE tehnika_id=:id");
	$stmt->bindParam(":id", $id);
	$data = $stmt->execute();
	
	if($data){
		echo "Uspeh";
		header("Location: tehnika.php");
	}
	else{
		echo "Greska";
	}

?>