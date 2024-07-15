<?php
require_once("header.php");
require_once('konekcija.php');
    $con = povezi();

    $sql = "SELECT * FROM racunari";
    $result = $con->query($sql);
    echo "<center><h2 style='margin-bottom: 15px'>Računari i laptopovi</h2></center>";
    while ($row = $result->fetch()) {
        echo "<div id='pattern' class='pattern'>
                <ul class='list img-list'>
                    <li>
                        <div class='li-img'>
                            <img src='" . $row["slika"] . "' />
                        </div>
                        <div class='li-text'>
                            <h4 class='li-head'>" . $row["proizvodjac"] ."</h4>
                            <p class='li-sub'>" . $row["cena"] ." €</p>
                            <a href='detailRacunari.php?id=" . $row["racunar_id"] . "'>Detaljnije o ovoj ponudi</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>";
    }
?>
</body>
</html>