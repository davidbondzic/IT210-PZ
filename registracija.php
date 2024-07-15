<?php 
	require_once('konekcija.php');
	$con = povezi();

	if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		$ime = $_POST['ime'];
		$prezime = $_POST['prezime'];
		$email = $_POST['email'];

		$stmt = $con->prepare("INSERT INTO korisnik (ime, prezime, email, username, password, admin) VALUES (:ime, :prezime, :email, :username, :password, 0)");
		$stmt->bindParam(":ime", $ime);
		$stmt->bindParam(":prezime", $prezime);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $password);

	 	$stmt->execute();
		header('Location: loginstrana.php');
	}
?>