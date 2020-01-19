<div>
    <ul id="intestazione">
    <?php foreach($templateParams["infoEvento"] as $evento): ?>
        <?php
            $img =  "./img/locandine/" . $evento["immagineE"] .".png";
            $alt =  "locandina dell'evento " . $evento["nomeE"] . "dell'artista " . $evento["nomeA"];
            $descEvento = $evento["descrizioneE"];
            $nomeEvento = $evento["nomeE"];
            $nomeArtista = $evento["nomeA"];
        ?>
        <li><a><h2><?php echo $nomeEvento?></h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Evento.png" alt="immagine rappresentativa di un ticket"/></a></li>
    </ul>
    <ul id="descrizione">
        <li><img src=<?php echo $img?> alt=<?php echo "locandina dell'evento ". $nomeEvento."dell'artista ". $nomeArtista?>></li>
        <article name="desc" id="insDesc" cols="" rows=""> <?php echo $descEvento?></article>
    </ul>
        <?php endforeach; ?>   
</div>
<div>
    <ul id="intestazione">
            <li><a><h2>Link Utili</h2></a></li>
            <li id="liLogoSubCat"><img src = "./img/icone/Link.png" alt="immagine rappresentativa di un collegamento"/></a></li>
        </ul><ul id="oggetti">
        <?php foreach($templateParams["infoEvento"] as $evento): ?>
        <?php
            $nomeArtista = $evento["nomeA"];
            $nomeUtente = $evento["nickname"];
            $categoria = $evento["categoria"];
            $genere = $evento["genere"];
            $IDartista = $evento["IDartista"];
        ?>
            <li class="linkEsterni"><a href=<?php echo "artista.php?IDartista=$IDartista" ?>><p><?php echo $nomeArtista?></p></a></li>
            <li class="linkEsterni"><a href="account.php"><p><?php echo "Organizzatore: " .$nomeUtente?></p></a></li>
            <li class="linkEsterni"><a href=<?php echo "categoria.php?nomeCategoria=$categoria" ?>><p><?php echo "Categoria: " .$categoria?></p></a></li>
        <?php endforeach; ?>     
        </ul>
</div>
<div>
    <ul id="intestazione">
            <li><a><h2>Date</h2></a></li>
            <li id="liLogoSubCat"><img src = "./img/icone/Calendario.png" alt="immagine rappresentativa di un calendario"/></a></li>
        </ul><ul id="tabella">
            <table>
                <tbody>
                <?php $tmp = 0 ?>
                <?php foreach($templateParams["dateEvento"] as $evento): ?>
                <?php
                    $IDevento = $evento["IDeventoE"];
                    $prezzo = $evento["prezzo"];
                    if($tmp == 0){
                        $citta1 = $evento["città"];
                        $luogo1 = $evento["luogo"];
                        $giornata1 = $evento["giornata"];
                        $postiLiberi1 = $evento["postiL"];
                    } else if ($tmp == 1){
                        $citta2 = $evento["città"];
                        $luogo2 = $evento["luogo"];
                        $giornata2 = $evento["giornata"];
                        $postiLiberi2 = $evento["postiL"];
                    }
                    $tmp++;
                ?>
                <?php endforeach; ?>
                <tr><th>Città</th><td><?php echo $citta1 ?></td><td><?php echo $citta2 ?></td></tr>
                <tr><th>Luogo</th><td><?php echo $luogo1 ?></td><td><?php echo $luogo2 ?></td></tr>
                <tr><th>Data</th><td><?php echo $giornata1 ?></td><td><?php echo $giornata2 ?></td></tr>
                <tr><th>Posti</th><td><?php echo $postiLiberi1 ?></td><td><?php echo $postiLiberi2 ?></td></tr>
                <tr><th>Prezzo</th><td><?php echo $prezzo." €" ?></td><td><?php echo $prezzo." €" ?></td></tr>
                </tbody>
                <tfoot>
                <tr><td></td><p></p><td><a href=<?php echo "infoEvento.php?dataEvento=$giornata1&IDevento=$IDevento" ?>><p>Maggiori Info</p></a></td><td><a href=<?php echo "infoEvento.php?dataEvento=$giornata2&IDevento=$IDevento" ?>><p>Maggiori Info</p></a></td></tr>
                </tfoot>
            </table>
        </ul>
</div>