<?php
    $templateParams["eventiTeatro"] = $dbh->getEventsByCategory("teatro");
    $templateParams["eventiSport"] = $dbh->getEventsByCategory("sport");
    $templateParams["eventiMusica"] = $dbh->getEventsByCategory("musica");
    $templateParams["eventiMostre"] = $dbh->getEventsByCategory("mostre");
    $templateParams["eventiInScadenza"] = $dbh->getExpiringEvents();
    $templateParams["eventiPiùRichiesti"] = $dbh->getMostRequiredEvents();
?>

<div>
    <ul id="intestazione">
        <li><h2>I più richiesti</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/IPiuRichiesti.png" alt="immagine rappresentativa di un like"/></a></li>
    </ul><ul id="oggetti">
        <li id="liFrecciaSx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaSx"src = "./img/icone/FrecciaSx.png" alt="icona di una freccia che punta verso sinistra"/></a></li>
        <?php foreach($templateParams ["eventiPiùRichiesti"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] .".png";
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
        ?>
        <li id = "liLocandina"><a href= ""><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a> <a href=""><p class = "NomeArtista"><?php echo $evento["nomeA"]; ?></p></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
<li id="liFrecciaDx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaDx" src = "./img/icone/FrecciaDx.png" alt="icona di una freccia che punta verso destra"/></a></li>
    </ul>
</div>
<div>
    <ul id="intestazione">
        <li><h2>In Scadenza</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/InScadenza.png" alt="immagine rappresentativa di un like"/></a></li>
    </ul><ul id="oggetti">
        <li id="liFrecciaSx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaSx"src = "./img/icone/FrecciaSx.png" alt="icona di una freccia che punta verso sinistra"/></a></li>
        <?php foreach($templateParams["eventiInScadenza"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] .".png";
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
        ?>
        <li id = "liLocandina"><a href= ""><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a> <a href=""><p class = "NomeArtista"><?php echo $evento["nomeA"]; ?></p></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
        <li id="liFrecciaDx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaDx" src = "./img/icone/FrecciaDx.png" alt="icona di una freccia che punta verso destra"/></a></li>
    </ul>
</div>
<div>
    <ul id="intestazione" class="clickable">
        <li><a href="teatro.html"><h2>Teatro</h2></a></li>
        <li id="liLogoSubCat"><a href="teatro.html"><img src = "./img/icone/Teatro.png" alt="immagine stilizzata di una maschera da teatro"/></a></li>
    </ul> 
    <ul id="oggetti">
        <li id="liFrecciaSx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaSx" src = "./img/icone/FrecciaSx.png" alt="icona di una freccia che punta verso sinistra"/></a></li>
        <?php foreach($templateParams["eventiTeatro"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] .".png";
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
        ?>
        <li id = "liLocandina"><a href= ""><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a> <a href=""><p class = "NomeArtista"><?php echo $evento["nomeA"]; ?></p></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
        <li id="liFrecciaDx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaDx" src = "./img/icone/FrecciaDx.png" alt="icona di una freccia che punta verso destra"/></a></li>
    </ul>
</div>
<div>
    <ul id="intestazione" class="clickable">
        <li><a href="sport.html"><h2>Sport</h2></a></li>
        <li id="liLogoSubCat"><a href="sport.html"><img src = "./img/icone/Sport.png" alt="immagine stilizzata di una maschera da teatro"/></a></li>
    </ul> 
    <ul id="oggetti">
        <li id="liFrecciaSx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaSx" src = "./img/icone/FrecciaSx.png" alt="icona di una freccia che punta verso sinistra"/></a></li>
        <?php foreach($templateParams["eventiSport"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] .".png";
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
        ?>
        <li id = "liLocandina"><a href= ""><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a> <a href=""><p class = "NomeArtista"><?php echo $evento["nomeA"]; ?></p></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
        <li id="liFrecciaDx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaDx" src = "./img/icone/FrecciaDx.png" alt="icona di una freccia che punta verso destra"/></a></li>
    </ul>
</div>
<div>
    <ul id="intestazione" class="clickable">
        <li><a href="musica.html"><h2>Musica</h2></a></li>
        <li id="liLogoSubCat"><a href="musica.html"><img src = "./img/icone/Musica.png" alt="immagine stilizzata di una maschera da teatro"/></a></li>
    </ul> 
    <ul id="oggetti">
        <li id="liFrecciaSx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaSx" src = "./img/icone/FrecciaSx.png" alt="icona di una freccia che punta verso sinistra"/></a></li>
        <?php foreach($templateParams["eventiMusica"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] .".png";
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
        ?>
        <li id = "liLocandina"><a href= ""><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a> <a href=""><p class = "NomeArtista"><?php echo $evento["nomeA"]; ?></p></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
        <li id="liFrecciaDx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaDx" src = "./img/icone/FrecciaDx.png" alt="icona di una freccia che punta verso destra"/></a></li>
    </ul>
</div>
<div>
    <ul id="intestazione" class="clickable">
        <li><a href="mostre.html"><h2>Mostre</h2></a></li>
        <li id="liLogoSubCat"><a href="mostre.html"><img src = "./img/icone/Mostre.png" alt="immagine stilizzata di una maschera da teatro"/></a></li>
    </ul> 
    <ul id="oggetti">
        <li id="liFrecciaSx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaSx" src = "./img/icone/FrecciaSx.png" alt="icona di una freccia che punta verso sinistra"/></a></li>
        <?php foreach($templateParams["eventiMostre"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] .".png";
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
        ?>
        <li id = "liLocandina"><a href= ""><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a> <a href=""><p class = "NomeArtista"><?php echo $evento["nomeA"]; ?></p></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
        <li id="liFrecciaDx"><a href=""><img onmouseover="onHoverFreccia();" onmouseout="offHoverFreccia();" id = "FrecciaDx" src = "./img/icone/FrecciaDx.png" alt="icona di una freccia che punta verso destra"/></a></li>
    </ul>
</div>