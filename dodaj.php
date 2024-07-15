<?php
require_once("header.php");
if(!$_SESSION["username"]){
    header('Location: index.php');
    exit(0);
}
?>
<head>
    <script src="javascript/js.js"></script>
</head>
    <div class="container">
        <center>
            <form action="dodajOglas.php" onsubmit="return dodajValidacija()" method="POST">
                <h2>Dodaj nov oglas</h2>
                <div class="col-50">
                    <SELECT class="selektovanje" name="selektovanje" value="selektovanje">
                        <option value="telefon">Mobilni uredjaj
                        <option value="racunar">Laptop / Računar
                        <option value="kamera">Kamera / fotoaparat
                        <option value="tehnika">Bela tehnika
                    </SELECT>
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
                <input type="submit" value="Dodaj"/>
            </form>
        </center>
    </div>
</body>
</html>