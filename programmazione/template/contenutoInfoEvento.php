<div>
        <?php foreach($templateParams["infoData"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] .".png";
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
            $IDevento = $evento["IDeventoE"];
            $IDartista = $evento["IDartistaE"];
            $nomeEvento = $evento["nomeE"];
            $città = $evento["città"];
            $luogo = $evento["luogo"];
            $mappa = $evento["mappa"];
            $giornata = $evento["giornata"];
            $prezzo = $evento["prezzo"];
        ?>
        <?php endforeach; ?>
    <ul id="intestazione">
            <li><a><h2><?php echo ucfirst($nomeEvento)?></h2></a></li>
        </ul><ul id="descrizione">
            <li><img src=<?php echo $img?> alt=<?php echo $alt?>></li>
            <li class="nome" ><p><?php echo $città?></p></li>
            <li class="città"><p><?php echo $giornata?></p></li>
            <li class="data"><p><?php echo $prezzo." €"?></p></li>
    </ul>
</div>
<div>
    <ul id="intestazione">
            <li><a><h2>Mappa per <?php echo ucfirst($luogo)?></h2></a></li>
            <li id="liLogoSubCat"><img src = "./img/icone/Mappa.png" alt="immagine rappresentativa di un localizzatore"/></a></li>
        </ul><ul id="oggetti">
                <?php echo $mappa?>
            </ul>
</div>
<div>
<button class = "buttonMain" ><a href =<?php echo "infoEvento.php?pressed=1&giornata=".$giornata."&IDevento=".$IDevento ?>> Aggiungi al Carrello</a></button>
</div>