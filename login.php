<?php
	require_once('konekcija.php');
	$con = povezi();
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = md5($password);
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		$stmt = $con->prepare("SELECT * FROM korisnik WHERE username=:username AND password=:password");
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password",$password);
		$stmt->execute();
			
		$row = $stmt->fetch();	
		if($row){
			session_start();
			$_SESSION["username"] = $row["username"];
			$_SESSION["ime"] = $row["ime"];
			$_SESSION["email"] = $row["email"];
			header('Location: index.php');
		}
		else {
			header('Location: loginstrana.php');
		}
	}
?>