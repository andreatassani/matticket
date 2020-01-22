<?php
$temp = 0;
?>

<div>
            <ul id="intestazione">
                <li><h2>I Tuoi Biglietti</h2></li>
                <li id="liLogoSubCat"><img src = "./img/icone/ITuoiBiglietti.png" alt="immagine rappresentativa di una coppia di biglietti"/></a></li>
            </ul>
            <ul id="listaBiglietti">
                <?php foreach($templateParams["eventiAggiunti"] as $giornata): ?>
                    <?php
                    $temp += $giornata["prezzo"]*$giornata["quantità"];
                    ?> 
                    <li class="liLocandina"><a href= <?php echo 'evento.php?IDevento='.$giornata["IDeventoE"] ?>><img class = "locandina" src = <?php echo "./img/locandine/".$giornata["immagineE"].".png" ?> alt=<?php echo "locandina dell'evento ". $giornata["immagineE"]."dell'artista ". $giornata["nomeA"]?>/></a><p><?php echo $giornata["nomeE"] ?></p><p>Prezzo: <?php echo $giornata["prezzo"] ?> €</p><p>quantità: <?php echo $giornata["quantità"] ?></p><img class = "cestino" src="./img/icone/Bidone.png" alt="immagine stilizzata di un cestino dei rifiuti"></li>
                <?php endforeach; ?> 
                <li class="liLocandina"><p id = "pTotale">TOTALE: <?php echo $temp ?> €</p></li>
            </ul>
        </div>
        <div>
            <button class = "buttonMain"><a href="account.html">Acquista</a></button>
        </div>
        <div>
    <ul id="intestazione">
        <li><h2>Consigliati Per Te</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Preferenze.png" alt="immagine rappresentativa di un like"/></a></li>
    </ul><ul id="oggetti">
        <li id="liFrecciaSx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaSx"src = "./img/icone/FrecciaSx.png" alt="icona di una freccia che punta verso sinistra"/></a></li>
        <?php foreach($templateParams["locandine"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] .".png";
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
            $IDevento = $evento["IDeventoE"];
            $IDartista = $evento["IDartistaE"];  
        ?>
        <li id = "liLocandina"><a href= <?php echo "evento.php?IDevento=$IDevento" ?>><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a> <a href= <?php echo "artista.php?IDartista=$IDartista" ?>><p class = "NomeArtista"><?php echo $evento["nomeA"]; ?></p></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
        <li id="liFrecciaDx"><a href= ><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaDx" src = "./img/icone/FrecciaDx.png" alt="icona di una freccia che punta verso destra"/></a></li>
    </ul>
</div>