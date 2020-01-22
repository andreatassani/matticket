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
<div>
    <button class = "buttonMain"><a href="logout.php">Log Out</a></button>
</div>