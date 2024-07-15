<?php
require_once ("header.php");
?>
<html>
<head>
    <script src="javascript/js.js"></script>
</head>
<body>
    <div class="container">
        <center>
            <form name="forma" onsubmit="return validacija()" method="post">
                <h2>Forma za dodatna pitanja</h2>
                <div class="col-50">
                    <input type="text" name="ime" id="ime" placeholder="Ime"/>
                </div>
                <div class="col-50">
                    <input type="text" name="prezime" id="prezime" placeholder="Prezime"/>
                </div>
                <div class="col-50">
                    <input type="text" name="email" id="email" placeholder="E-mail"/>
                </div>
                <div class="col-50">
                    <input type="text" name="broj" id="broj" placeholder="Br. telefona"/>
                </div>
                <div class="col-50">
                    <input type="text" name="naslov" id="naslov" placeholder="Naslov"/>
                </div>
                <div class="col-50">
                    <textarea name="poruka" id="poruka" placeholder="Tekst poruke...."></textarea>
                </div>
                <SELECT class="selektovanje" NAME="Vrsta poruke">
                    <option value="pitanje">Pitanje
                    <option value="predlog">Predlog
                    <option value="zalba">Žalba
                </SELECT><br><br>
                <input type=file name="file"><br><br>
                <input type="submit" value="Submit"/><br><br>
            </form>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1414.7840138230983!2d20.45439011515025!3d44.830364255688295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6530da697d59%3A0xd2bdfbf9d4b80259!2sUniverzitet%20Metropolitan!5e0!3m2!1ssr!2srs!4v1643643762331!5m2!1ssr!2srs" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <p>info@metropolitan.ac.rs<br> +381 (11) 20 30 885</p>
        </center>
    </div>
</body>
</html>