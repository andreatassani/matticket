<style>
    #artista{
        width:50% !important;
    }
</style>

<div>
    <ul id="intestazione">
        <li><h2><?php echo $templateParams["tipo"]?> </h2></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Lente.png" alt="immagine rappresentativa di una coppia di biglietti"/></a></li>
    </ul>

    <ul id="listaBiglietti">
    <?php foreach($templateParams["ris"] as $artista): ?>
        <?php
            $numeroEventi = $dbh->getEventsByArtist($artista["IDartista"]);
            $numeroEventi = count($numeroEventi);
        ?>
        <li class="liLocandina">
            <a href= <?php echo "artista.php?IDartista=".$artista["IDartista"] ?>><img class = "locandina" src = <?php echo "./img/artisti/".$artista["immagineA"].".png" ?> alt=<?php echo "locandina dell'artista ". $artista["nomeA"]?>/></a>
            <p id="nomeEvento"><?php echo $artista["nomeA"] ?></p>
            <p id=artista class="artista"><a href=<?php echo $artista["sito"]?>>Sito web ufficiale: <?php echo $artista["sito"]?></a></p>
            <p>Eventi attivi: <?php echo $numeroEventi?></p>
        </li>
    <?php endforeach; ?>
</ul>
    
</div>
<div>
    <button class = "buttonMain" href = ><a href=<?php echo "risultatoRicerca.php?google=1&mes=".$templateParams["messaggio"]?>>Googlalo!</a></button>
</div>