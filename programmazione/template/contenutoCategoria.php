<div>
    <ul id="intestazione">
        <li><h2>I più richiesti</h2></li>
        <li id="liLogoSubCat"><img src = <?php echo "./img/icone/iPiuRichiesti.png"?> alt="immagine rappresentativa di un like"/></a></li>
    </ul><ul id="oggetti">
        <?php foreach($templateParams ["eventiPiuRichiestiCategoria"] as $evento): ?>
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
    <ul id="intestazione">
        <li><h2>In Scadenza</h2></li>
        <li id="liLogoSubCat"><img src = <?php echo "./img/icone/iPiuRichiesti.png"?> alt="immagine rappresentativa di un like"/></a></li>
    </ul><ul id="oggetti">
        <?php foreach($templateParams["eventiInScadenzaCategoria"] as $evento): ?>
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
    <ul id="intestazione">
        <li id = "liSub"><a href=<?php echo "genere.php?genere=".$templateParams["nomeSubCat1"]?>><h2><?php echo ucfirst($templateParams["nomeSubCat1"]) ?></h2></a></li>
        <li id="liLogoSubCat"><img src = <?php echo "./img/icone/".$templateParams["nomeSubCat1"].".png"?> alt="immagine stilizzata di una maschera da teatro"/></li>
    </ul> 
    <ul id="oggetti">
        <?php foreach($templateParams["eventiSubCat1"] as $evento): ?>
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
    <ul id="intestazione">
        <li id = "liSub"><a href=<?php echo "genere.php?genere=".$templateParams["nomeSubCat2"]?>><h2><?php echo ucfirst($templateParams["nomeSubCat2"]) ?></h2></a></li>
        <li id="liLogoSubCat"><img src = <?php echo "./img/icone/".$templateParams["nomeSubCat2"].".png"?> alt="immagine stilizzata di una maschera da teatro"/></a></li>
    </ul> 
    <ul id="oggetti">
        <?php foreach($templateParams["eventiSubCat2"] as $evento): ?>
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
