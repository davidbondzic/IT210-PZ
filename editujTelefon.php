<?php
require_once("konekcija.php");
$con=povezi();
$idTelefona = $_GET["id"];
$proizvodjac = $_POST["proizvodjac"];
$opis = $_POST["opis"];
$cena = $_POST["cena"];
$slika = $_POST["slika"];

    $stmt = $con->prepare("UPDATE telefoni SET proizvodjac=:proizvodjac,opis=:opis,cena=:cena,slika=:slika WHERE telefon_id = :id");
	$stmt->bindParam(":proizvodjac", $proizvodjac);
    $stmt->bindParam(":opis", $opis);
    $stmt->bindParam(":cena", $cena);
    $stmt->bindParam(":slika", $slika);
    $stmt->bindParam(":id", $idTelefona);
	$stmt->execute();

    header('Location: telefoni.php');
?>