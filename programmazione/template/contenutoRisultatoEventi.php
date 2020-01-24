<div>
    <ul id="intestazione">
        <li><h2><?php echo $templateParams["tipo"]?> </h2></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Lente.png" alt="immagine rappresentativa di una coppia di biglietti"/></a></li>
    </ul>


    <ul id="listaBiglietti">
    <?php foreach($templateParams["ris"] as $evento): ?>
        <li class="liLocandina">
            <a href= <?php echo "infoEvento.php?dataEvento=".$evento["giornata"]."&IDevento=".$evento["IDeventoE"] ?>><img class = "locandina" src = <?php echo "./img/locandine/".$evento["immagineE"] ?> alt=<?php echo "locandina dell'evento ". $evento["immagineE"]."dell'artista ". $evento["nomeA"]?>/></a>
            <p id="nomeEvento"><?php echo $evento["nomeE"] ?></p>
            <p id="artista"><a href=<?php echo "artista.php?IDartista=".$evento["IDartista"]?>><?php echo $evento["nomeA"]?></a></p>
            <p><?php echo $evento["giornata"] ?></p>
            <p id="postiLiberi">Posti liberi: <?php echo $evento["postiL"] ?></p>
           
            <p><?php echo $evento["prezzo"] ?> €</p>
        </li>
    <?php endforeach; ?>
    </ul>

</div>
<div>
    <button class = "buttonMain" href = ><a href=<?php echo "risultatoRicerca.php?google=1&mes=".$templateParams["messaggio"]?>>Googlalo!</a></button>>
</div>