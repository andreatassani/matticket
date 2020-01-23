<?php
$temp = 0;
?>

    <div>
        <ul id="intestazione">
            <li><h2>Eventi </h2></li>
            <li id="liLogoSubCat"><img src = "./img/icone/ITuoiBiglietti.png" alt="immagine rappresentativa di una coppia di biglietti"/></a></li>
        </ul>
        <ul id="listaBiglietti">
            <?php foreach($templateParams["eventiAggiunti"] as $giornata): ?>
                <?php
                $temp += $giornata["prezzo"]*$giornata["quantità"];
                ?> 
                <li class="liLocandina">
                    <a href= <?php echo 'evento.php?IDevento='.$giornata["IDeventoE"] ?>><img class = "locandina" src = <?php echo "./img/locandine/".$giornata["immagineE"].".png" ?> alt=<?php echo "locandina dell'evento ". $giornata["immagineE"]."dell'artista ". $giornata["nomeA"]?>/></a>
                    <p id="nomeEvento"><?php echo $giornata["nomeE"] ?></p><p><?php echo $giornata["giornata"] ?></p>
                    <p><?php echo $giornata["prezzo"] ?> €</p>
                    <a href= <?php echo "carrello.php?togli=1&IDevento=".$giornata["IDevento"]."&giornata=".$giornata["giornata"]?>><img class = "cestino" src="./img/icone/Minus.png" alt="immagine stilizzata di un cestino dei rifiuti"></a>
                    <p id="quantità"><?php echo $giornata["quantità"] ?></p>
                    <a href= <?php echo "carrello.php?aggiungi=1&IDevento=".$giornata["IDevento"]."&giornata=".$giornata["giornata"]?>><img class = "cestino" src="./img/icone/Plus.png" alt="immagine stilizzata di un cestino dei rifiuti"></a>
                    <a href= <?php echo "carrello.php?eliminaEvento=1&IDevento=".$giornata["IDevento"]."&giornata=".$giornata["giornata"]?>><img class = "cestino" src="./img/icone/Bidone.png" alt="immagine stilizzata di un cestino dei rifiuti"></a>
                </li>
            <?php endforeach; ?> 
            <li class="liLocandina"><p id = "pTotale">TOT: <?php echo $temp ?>€</p></li>
        </ul>
    </div>
    <div>
        <button class = "buttonMain" onclick="notify('acquisto avvenuto con successo!')"><a href="account.php?acquistato=1">Acquista</a></button>
        <button class = "buttonMain" onclick="notify('carrello svuotato con successo!')"><a href="carrello.php?svuota=1">Svuota Carrello</a></button>
    </div>
<div>
<ul id="intestazione">
    <li><h2>Consigliati</h2></a></li>
    <li id="liLogoSubCat"><img src = "./img/icone/Preferenze.png" alt="immagine rappresentativa di un like"/></a></li>
</ul><ul id="oggetti">
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
</ul>
</div>