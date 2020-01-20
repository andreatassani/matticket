<?php
$desc = "Ciao a tutti, ci presentiamo: siamo Andrea e Michele, due studenti forlivesi di Ingegneria e Scienze Informatiche presso il Campus di Cesena dell’Università di Bologna. Giunti al terzo anno (con qualche esame indietro, giusto per non farsi mancare niente), ci troviamo alle prese con questo sito web che è parte integrante dell’esame di Tecnologie Web.
Ci è stato richiesto di creare un sito per la gestione, vendita ed acquisto di biglietti per eventi: nel nostro caso, abbiamo deciso di focalizzare la nostra attenzione sugli eventi musicali, sportivi, teatrali e di gallerie d’arte ispirandoci soprattutto al leader mondiale in questo settore: TicketOne.
Ogni suddetta categoria, inoltre, di divide in ulteriori due sottocategorie: italiani e internazionali, partite e manifestazioni, cabaret e musical, pittura e fotografia.
Speriamo che voi utenti possiate trovarvi bene ad interagire con il nostro sito.
Qui sotto, inoltre, troverete le nostre mail tramite cui contattarci per qualsiasi informazione.
Buona visita 😊";
?>

<div>
    <ul id="intestazione">
        <li><a><h2>Chi Siamo?</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Nuvoletta.png" alt="immagine rappresentativa di un ticket"/></a></li>
    </ul>
    <ul id="descrizione">
        <li><img src="./img/Logo.png" alt= "Logo Matticket"></li>
        <article name="desc" id="insDesc" cols="" rows=""> <?php echo $desc?> </article>
    </ul>
</div>
<div>
    <ul id="intestazione">
            <li><a><h2>Email Amministratori</h2></a></li>
            <li id="liLogoSubCat"><img src = "./img/icone/Link.png" alt="immagine rappresentativa di un collegamento"/></a></li>
        </ul><ul id="oggetti">
        <?php foreach($templateParams["emails"] as $email): ?>
        <li class="linkEsterni"><a href=<?php echo "mailto:".$email["email"]?>><p><?php echo $email["email"]?></p></a></li>
        <?php endforeach; ?>
        </ul>
</div>