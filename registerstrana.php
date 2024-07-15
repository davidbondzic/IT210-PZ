<?php
require_once ("header.php");
?>
<head>
    <script src="javascript/js.js"></script>
</head>
<div class="container">
    <center>
        <form action="registracija.php" onsubmit="return registerValidacija()" method="post">
            <h2>Registrujte se</h2>
            <div class="col-50">
                <input type="text" name="email" id="mejl" placeholder="E-mail*"/>
            </div>
            <div class="col-50">
                <input type="text" name="ime" id="imee" placeholder="Ime*"/>
            </div>
            <div class="col-50">
                <input type="text" name="prezime" id="prezimee" placeholder="Prezime*"/>
            </div>
            <div class="col-50">
                <input type="text" name="username" id="usernamee" placeholder="Korisničko ime*"/>
            </div>
            <div class="col-50">
                <input type="password" name="password" id="pasword" placeholder="Lozinka*"/>
            </div>
            <input type="submit" value="Register"/>
            <br>
            <br>
            <a href="loginstrana.php">Već posedujete nalog? Idite na login</a>
        </form>
    </center>
</div>
</body>
</html>