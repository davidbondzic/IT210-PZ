<?php

	require_once('konekcija.php');
	$con = povezi();

	$selektovanje = $_POST["selektovanje"];
	$proizvodjac = $_POST["proizvodjac"];
	$opis = $_POST["opis"];
	$cena = $_POST["cena"];
	$slika = $_POST["slika"];

	if(isset($_POST["selektovanje"]) && $selektovanje == "telefon"){
		if(isset($_POST['proizvodjac']) && isset($_POST['opis']) && isset($_POST['cena']) && isset($_POST['slika'])){
			$stmt = $con->prepare("INSERT INTO telefoni (proizvodjac, opis, cena, slika) VALUES (:proizvodjac, :opis, :cena, :slika)");
			$stmt->bindParam(":proizvodjac", $proizvodjac);
			$stmt->bindParam(":opis", $opis);
			$stmt->bindParam(":cena", $cena);
			$stmt->bindParam(":slika", $slika);
		}
		$stmt->execute();
	}
	else if(isset($_POST["selektovanje"]) && $selektovanje == "racunar"){
		if(isset($_POST['proizvodjac']) && isset($_POST['opis']) && isset($_POST['cena']) && isset($_POST['slika'])){
			$stmt = $con->prepare("INSERT INTO racunari (proizvodjac, opis, cena, slika) VALUES (:proizvodjac, :opis, :cena, :slika)");
			$stmt->bindParam(":proizvodjac", $proizvodjac);
			$stmt->bindParam(":opis", $opis);
			$stmt->bindParam(":cena", $cena);
			$stmt->bindParam(":slika", $slika);
		}
		$stmt->execute();
	}
	else if(isset($_POST["selektovanje"]) && $selektovanje == "kamera"){
		if(isset($_POST['proizvodjac']) && isset($_POST['opis']) && isset($_POST['cena']) && isset($_POST['slika'])){
			$stmt = $con->prepare("INSERT INTO kamere (proizvodjac, opis, cena, slika) VALUES (:proizvodjac, :opis, :cena, :slika)");
			$stmt->bindParam(":proizvodjac", $proizvodjac);
			$stmt->bindParam(":opis", $opis);
			$stmt->bindParam(":cena", $cena);
			$stmt->bindParam(":slika", $slika);
		}
		$stmt->execute();
	}
	else if(isset($_POST["selektovanje"]) && $selektovanje == "tehnika"){
		if(isset($_POST['proizvodjac']) && isset($_POST['opis']) && isset($_POST['cena']) && isset($_POST['slika'])){
			$stmt = $con->prepare("INSERT INTO tehnika (proizvodjac, opis, cena, slika) VALUES (:proizvodjac, :opis, :cena, :slika)");
			$stmt->bindParam(":proizvodjac", $proizvodjac);
			$stmt->bindParam(":opis", $opis);
			$stmt->bindParam(":cena", $cena);
			$stmt->bindParam(":slika", $slika);
		}
		$stmt->execute();
	}
	header('Location: dodaj.php');
?>