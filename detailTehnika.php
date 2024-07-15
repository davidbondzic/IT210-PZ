<?php
require_once("header.php");
require_once("konekcija.php");
$con=povezi();

	$id = $_GET['id'];

	$stmt = $con->prepare("SELECT * FROM tehnika WHERE tehnika_id = :id");
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	echo "<center>";
	while ($data = $stmt->fetch()) {
		$proizvod = "<h1>" . $data["proizvodjac"] . "</h1><br/>" . "<img class='klasa' src='" .
		$data["slika"] . "' width='25%' height='25%'/><br/> Opis: " .
		$data["opis"] ."<br/> Cena: <b>" . $data["cena"] . "</b><br/>";
		$delete = "<a href='deleteTehnika.php?id=" . $data["tehnika_id"] . "'>Izbriši</a><br/>";
		$edit = "<a href='editTehnika.php?id=" . $data["tehnika_id"] . "'>Izmeni</a><br/>";
		
	}
	echo $proizvod . ((isset($is_mod)) ? $delete : "") . ((isset($is_mod)) ? $edit : "") . "<br/><a href='tehnika.php'>Nazad</a></center>";
?>
	</body>
</html>