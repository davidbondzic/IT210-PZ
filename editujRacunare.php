<?php
require_once("konekcija.php");
$con=povezi();
$idRacunari = $_GET["id"];
$proizvodjac = $_POST["proizvodjac"];
$opis = $_POST["opis"];
$cena = $_POST["cena"];
$slika = $_POST["slika"];

    $stmt = $con->prepare("UPDATE racunari SET proizvodjac=:proizvodjac,opis=:opis,cena=:cena,slika=:slika WHERE racunar_id = :id");
	$stmt->bindParam(":proizvodjac", $proizvodjac);
    $stmt->bindParam(":opis", $opis);
    $stmt->bindParam(":cena", $cena);
    $stmt->bindParam(":slika", $slika);
    $stmt->bindParam(":id", $idRacunari);
	$stmt->execute();

    header('Location: racunari.php');
?>