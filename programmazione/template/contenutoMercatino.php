<div>
    <ul id="intestazione">
        <li><h2>Ticket Community</h2></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Community.png" alt="immagine rappresentativa della community"/></a></li>
    </ul>
    <ul id="listaBiglietti">
    <?php foreach($templateParams["ris"] as $evento): ?>
        <li class="liLocandina">
            <a href= <?php echo "infoEvento.php?dataEvento=".$evento["giornata"]."&IDevento=".$evento["IDeventoE"] ?>><img class = "locandina" src = <?php echo "./img/locandine/".$evento["immagineE"] ?> alt=<?php echo "locandina dell'evento ". $evento["immagineE"]."dell'artista ". $evento["nomeA"]?>/></a>
            <p id="nomeEvento"><?php echo $evento["nomeE"] ?></p>
            <p id="artista"><a href=<?php echo "artista.php?IDartista=".$evento["IDartista"]?>><?php echo $evento["nomeA"]?></a></p>
            <p><?php echo $evento["giornata"] ?></p>
            <p><?php echo "qtà: ".$evento["quantità"] ?></p>
            <p><?php echo "TOT: ".$evento["prezzo"]*$evento["quantità"]/2 ?> €</p>
            <a href= <?php echo "account.php?mercatino=1&IDevento=".$evento["IDevento"]."&giornata=".$evento["giornata"]."&IDvenditore=".$evento["IDvenditore"]?> ><img class = 'accetta' src='./img/icone/Acquisto.png' alt='icona di acquisto biglietto'></a></li>
    <?php endforeach; ?>
</ul> 
</div>