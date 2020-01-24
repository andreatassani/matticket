<div>
    <ul id="intestazione">
        <li><h2>I più richiesti</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/IPiuRichiesti.png" alt="immagine rappresentativa di un like"/></a></li>
    </ul><ul id="oggetti">
        <?php foreach($templateParams ["eventiPiuRichiesti"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] ;
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
            $IDevento = $evento["IDeventoE"];
            $IDartista = $evento["IDartistaE"];
        ?>
        <li id = "liLocandina" ><a href= <?php echo "evento.php?IDevento=$IDevento" ?>><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a> <a href= <?php echo "artista.php?IDartista=$IDartista" ?>><p class = "NomeArtista"><?php echo $evento["nomeA"]; ?></p></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
</ul>
</div>
<div>
    <ul id="intestazione">
        <li><h2>In Scadenza</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/InScadenza.png" alt="immagine rappresentativa di un like"/></a></li>
    </ul><ul id="oggetti">
        <?php foreach($templateParams["eventiInScadenza"] as $evento): ?>
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
    <ul id="intestazione" class="clickable">
        <li><a href=<?php echo "categoria.php?nomeCategoria=teatro" ?>><h2>Teatro</h2></a></li>
        <li id="liLogoSubCat"><a href="teatro.html"><img src = "./img/icone/Teatro.png" alt="immagine stilizzata di una maschera da teatro"/></a></li>
    </ul> 
    <ul id="oggetti">
        <?php foreach($templateParams["eventiTeatro"] as $evento): ?>
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
    <ul id="intestazione" class="clickable">
        <li><a href= <?php echo "categoria.php?nomeCategoria=sport" ?>><h2>Sport</h2></a></li>
        <li id="liLogoSubCat"><a href="sport.html"><img src = "./img/icone/Sport.png" alt="immagine stilizzata di una maschera da teatro"/></a></li>
    </ul> 
    <ul id="oggetti">
        <?php foreach($templateParams["eventiSport"] as $evento): ?>
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
    <ul id="intestazione" class="clickable">
        <li><a href=<?php echo "categoria.php?nomeCategoria=musica" ?>><h2>Musica</h2></a></li>
        <li id="liLogoSubCat"><a href="musica.html"><img src = "./img/icone/Musica.png" alt="immagine stilizzata di una maschera da teatro"/></a></li>
    </ul> 
    <ul id="oggetti">
        <?php foreach($templateParams["eventiMusica"] as $evento): ?>
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
    <ul id="intestazione" class="clickable">
        <li><a href=<?php echo "categoria.php?nomeCategoria=mostre" ?>><h2>Mostre</h2></a></li>
        <li id="liLogoSubCat"><a href="mostre.html"><img src = "./img/icone/Mostre.png" alt="immagine stilizzata di una maschera da teatro"/></a></li>
    </ul> 
    <ul id="oggetti">
        <?php foreach($templateParams["eventiMostre"] as $evento): ?>
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