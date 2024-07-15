<?php
require_once("konekcija.php");
$con=povezi();
$idKamere = $_GET["id"];
$proizvodjac = $_POST["proizvodjac"];
$opis = $_POST["opis"];
$cena = $_POST["cena"];
$slika = $_POST["slika"];

    $stmt = $con->prepare("UPDATE kamere SET proizvodjac=:proizvodjac,opis=:opis,cena=:cena,slika=:slika WHERE kamera_id = :id");
	$stmt->bindParam(":proizvodjac", $proizvodjac);
    $stmt->bindParam(":opis", $opis);
    $stmt->bindParam(":cena", $cena);
    $stmt->bindParam(":slika", $slika);
    $stmt->bindParam(":id", $idKamere);
	$stmt->execute();

    header('Location: kamere.php');
?>