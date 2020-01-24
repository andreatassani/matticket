<?php
$nuovoEvento = '<button class = "buttonMain"><a href="nuovoEvento.php">Crea Nuovo Evento</a></button>'
?>
<?php foreach($templateParams["infoUser"] as $user): ?>
<?php
    $nickname = $user["nickname"];
    $nome = $user["nomeU"];
    $cognome = $user["cognomeU"];
    $tipoAccount = $user["tipoaccount"];
    $email = $user["email"];
    $immagine = $user["immagineU"];
?>
<?php endforeach; ?>
<div>
    <ul id="intestazione">
        <li><a><h2>Dati Personali</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Dettagli.png" alt="immagine rappresentativa un foglio scritto e di una lente d'ingrandimento"/></a></li>
    </ul>
    <ul id="listaForm">
        <li id="liImg"><img src=<?php echo "./img/profilo/".$immagine?> alt="immagine profilo"></li>
        <li><label class="labelAccount" for=”insNickName″>Nick Name:</label><label class="labelInfo"><?php echo $nickname?></label></li>
        <li><label class="labelAccount" for=”insNome″>Nome:</label><label class="labelInfo"><?php echo $nome?></label></li>
        <li><label class="labelAccount" for=”insCognome″>Cognome:</label><label class="labelInfo"><?php echo $cognome?></label></li>
        <li><label class="labelAccount" for=”insTipo″>Tipologia Account:</label><label class="labelInfo"><?php echo $tipoAccount?></label></li>
        <li><label class="labelAccount" for=”insEmail″>Email:</label><label class="labelInfo"><?php echo $email?></label></li>
    </ul>
</div>
<div>
    <?php if($tipoAccount != "cliente"){ echo $nuovoEvento; }?>
</div>
<div>
    <ul id="intestazione">
        <li><h2>Eventi acquistati</h2></li>
        <li id="liLogoSubCat"><img src = "./img/icone/ITuoiBiglietti.png" alt="immagine rappresentativa di una coppia di biglietti"/></a></li>
    </ul>
    <ul id="listaBiglietti">
        <?php foreach($templateParams["eventiAcquistati"] as $giornata): ?>
            <?php
            $temp += $giornata["prezzo"]*$giornata["quantità"];
            $orario = str_replace(":00.000000", "", $giornata["orario"]);
            ?> 
            <li class="liLocandina">
                <a href= <?php echo 'evento.php?IDevento='.$giornata["IDeventoE"] ?>><img class = "locandina" src = <?php echo "./img/locandine/".$giornata["immagineE"] ?> alt=<?php echo "locandina dell'evento ". $giornata["immagineE"]."dell'artista ". $giornata["nomeA"]?>/></a>
                <p id="nomeEvento"><?php echo $giornata["nomeE"] ?></p><p><?php echo $giornata["giornata"]."   alle   ".$orario ?></p>
                <p><?php echo $giornata["città"]." - ".$giornata["luogo"] ?></p><p>quantità: <?php echo $giornata["quantità"] ?></p>
                <a href= <?php echo 'mercatino.php?vendesi=1&IDutente='.$_SESSION["IDutente"].'&IDevento='.$giornata["IDeventoE"].'&giornata='.$giornata["giornata"]?> ><img class = 'accetta' src='./img/icone/MercatinoArancione.png' alt='immagine stilizzata di un +'></a></li>
    <?php endforeach; ?> 
    </ul>
</div>
<div>
    <ul id="intestazione">
        <li><h2>Consigliati</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Preferenze.png" alt="immagine rappresentativa di un like"/></a></li>
    </ul><ul id="oggetti">
        <?php foreach($templateParams["locandine"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] ;
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
            $IDevento = $evento["IDeventoE"];
            $IDartista = $evento["IDartistaE"];
        ?>
        <li id = "liLocandina"><a href= <?php echo "evento.php?IDevento=$IDevento" ?>><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a> <a href= <?php echo "artista.php?IDartista=$IDartista" ?>><p class = "NomeArtista"><?php echo $evento["nomeA"]; ?></p></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
    </ul>
</div>
<div>
    <button class = "buttonMain"><a href="logout.php">Log Out</a></button>
</div>