<?php foreach($templateParams["infoArtista"] as $artista): ?>
<?php
    $img =  "./img/artisti/" . $artista["immagineA"] ;
    $altImgA =  "immagine dell'artista " . $artista["nomeA"];
    $nomeArtista = $artista["nomeA"];
    $desc = $artista["descrizioneA"];
    $sito = $artista["sito"];
?>
<?php endforeach; ?>
<div>
    <div>
        <ul id="intestazione">
            <li><a><h2><?php echo $nomeArtista?></h2></a></li>
            <li id="liLogoSubCat"><img src = "./img/icone/Artista.png" alt="immagine rappresentativa di un artista"/></a></li>
        </ul>
        <ul id="descrizione">
            <li><img src=<?php echo $img?> alt=<?php echo $altImgA?>></li>
            <article name="desc" id="insDesc" cols="" rows=""><?php echo $desc ?></article>
        </ul>
    </div>
</div>
<div>
    <ul id="intestazione">
        <li><a><h2>Eventi</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Evento.png" alt="immagine rappresentativa di un ticket"/></a></li>
    </ul><ul id="oggetti">
        <?php foreach($templateParams ["eventiArtista"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] ;
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $prezzo = $evento["prezzo"] . " €";
            $IDevento = $evento["IDeventoE"];
            $IDartista = $evento["IDartistaE"];
        ?>
        <li id = "liLocandina"><a href= <?php echo "evento.php?IDevento=$IDevento" ?>><img src = <?php echo $img ?> alt= <?php echo $alt; ?>/></a><p><?php echo $evento["nomeE"]; ?><br><?php echo $prezzo; ?></p></li>
        <?php endforeach; ?>
    </ul>
</div>
<div>
    <button class = "buttonMain"><a href= <?php echo $sito?>>Sito di <?php echo $nomeArtista?></a></button>
</div>