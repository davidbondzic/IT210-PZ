<?php
require_once("header.php");
require_once("konekcija.php");
$con=povezi();
$idKamere = $_GET["id"];
?>

<div class="container">
        <center>
            <form action="editujKamere.php?id=<?php echo $idKamere?>" onsubmit="return dodajValidacija()" method="POST">
                <h2>Izmeni telefon</h2>
                <div class="col-50">
                </div>
                <div class="col-50">
                    <input type="text" name="proizvodjac" id="proizvodjac" placeholder="Proizvodjac"/>
                </div>
                <div class="col-50">
                    <textarea name="opis" id="opis" placeholder="Opis proizvoda"></textarea>
                </div>
                <div class="col-50">
                    <input type="text" name="cena" id="cena" placeholder="Cena"/>
                </div>
                <div class="col-50">
                    <input type="text" name="slika" id="slika" placeholder="Slika proizvoda"/>
                </div><br>
                <input type="submit" value="Izmeni"/>
            </form>
        </center>
    </div>