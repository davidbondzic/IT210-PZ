<?php
session_start();
require_once('konekcija.php');

$is_mod;
$con = povezi();
$stmt = $con->prepare('SELECT * FROM korisnik WHERE username=:username');
$stmt->bindParam(":username", $_SESSION['username']);

$stmt->execute();
$USER = $stmt->fetch();

if($USER){

   if($USER['admin']){
     $is_mod = true;
   }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>TechnoDB</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="pic/logo.png">
</head>
<body>
<header>
    <nav>
      <ul>
        <li><a href="index.php">Početna</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
        <div class="dropdown">
          <button class="dropbtn">Oglasi</button>
          <div class="dropdown-content">
            <a href="telefoni.php">Telefoni</a>
            <a href="racunari.php">Računari</a>
            <a href="kamere.php">Kamere</a>
            <a href="tehnika.php">Bela tehnika</a>
          </div>
        </div>
        <?php echo (isset($_SESSION["ime"]) ? '<li><a href="dodaj.php">Dodaj nov oglas</a></li>' : '');?>
        <?php
          if(isset($_SESSION["ime"])){
            if($_SESSION["ime"] != ""){
              echo "<li><a href='logout.php'>Odjavi se - " . $_SESSION['username'] . "</a></li>";
            }
            }else{
              echo "<li><a href='loginstrana.php'>Login</a></li>";
            }
        ?>
      </ul>
    </nav>
    <footer>
      <div class="footer-content">
        <h3>David Bondžić 4887 - Softversko inženjerstvo</h3>
      </div>
      <div class="footer-bottom">
        <p>Student prve godine softverskog inženjerstva na Univerzitetu Metropolitan u Beogradu.</p>
        <p>david.bondzic.4887@metropolitan.edu.rs</p>
      </div>
    </footer>
</header>