<?php
require_once ("header.php");
?>
<head>
    <script src="javascript/js.js"></script>
</head>
<div class="container">
    <center>
        <form action="login.php" onsubmit="return loginValidacija()" method="post">
            <h2>Ulogujte se</h2>
            <div class="col-50">
                <input type="text" name="username" id="username" placeholder="Korisničko ime"/>
            </div>
            <div class="col-50">
                <input type="password" name="password" id="password" placeholder="Lozinka"/>
            </div>
            <input type="submit" value="Login"/>
            <br>
            <a href="registerstrana.php">Nemate nalog? Registrujte se</a>
        </form>
    </center>
</div>
</body>
</html>