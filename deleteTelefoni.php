<?php
	require_once('konekcija.php');
	$con = povezi();
	$id = $_GET['id'];
	
	$stmt = $con->prepare("DELETE FROM telefoni WHERE telefon_id=:id");
	$stmt->bindParam(":id", $id);
	$data = $stmt->execute();
	
	if($data){
		echo "Uspeh";
		header("Location: telefoni.php");
	}
	else{
		echo "Greska";
	}

?>