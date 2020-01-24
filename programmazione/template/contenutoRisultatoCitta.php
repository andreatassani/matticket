<div>
    <ul id="intestazione">
        <li><h2><?php echo $templateParams["tipo"]?> </h2></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Lente.png" alt="immagine rappresentativa di una coppia di biglietti"/></a></li>
    </ul>
    <ul id="listaBiglietti">
    <?php foreach($templateParams["ris"] as $giornata): ?>
        <li class="liLocandina">
            <a href= <?php echo "evento.php?dataEvento=".$giornata["giornata"]."&IDevento=".$giornata["IDeventoE"] ?>><img class = "locandina" src = <?php echo "./img/locandine/".$giornata["immagineE"] ?> alt=<?php echo "locandina dell'evento ". $giornata["nomeE"]?>/></a>
            <p id="nomeEvento"><?php echo $giornata["nomeE"] ?></p><p><?php echo $giornata["giornata"] ?></p>
            <p id="città"><?php echo $giornata["città"]?></p>
        </li>
    <?php endforeach; ?>
</ul>

</div>
<div>
    <button class = "buttonMain" href = ><a href=<?php echo "risultatoRicerca.php?google=1&mes=".$templateParams["messaggio"]?>>Googlalo!</a></button>
</div>