<?php
require_once("konekcija.php");
$con=povezi();
$idTelefona = $_GET["id"];
$opis = $_POST["opis"];

    $stmt = $con->prepare("UPDATE telefoni SET opis='kupljeno' WHERE telefon_id = :id");
    $stmt->bindParam(":opis", $opis);
	$stmt->execute();

    header('Location: telefoni.php');
?>