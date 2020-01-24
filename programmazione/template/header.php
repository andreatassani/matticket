<ul id = "ulHeader"class="Cerca">
    <li id = "liLogoAltoSx" ><a href=<?php echo "index.php"?>><img id = "LogoSx" src="./img/Logo.png"alt="logo MaTTicket"/></a></li>
    <li class="dropdown" onmouseover="onHoverCategorie();" onmouseout="offHoverCategorie();">
        <button class="dropbtn">Categorie <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content">
            <a href=<?php echo "categoria.php?nomeCategoria=teatro" ?>>Teatro<img src = "./img/icone/Teatro.png" alt="immagine stilizzata di una maschera da teatro"/></a>
            <a href=<?php echo "categoria.php?nomeCategoria=musica"?>>Musica<img src = "./img/icone/Musica.png" alt="immagine di una chiave di violino"/></a>
            <a href=<?php echo "categoria.php?nomeCategoria=sport"?>>Sport<img src = "./img/icone/Sport.png" alt="immagine stilizzata di un pallone da calcio"/></a>
            <a href=<?php echo "categoria.php?nomeCategoria=mostre"?>>Mostre<img src = "./img/icone/Mostre.png" alt="immagine stilizzata del quadro 'L'Urlo di Munch'"/></a>
        </div>
    </li>
    <li id = "liTendina"><img id = "Tendina" src="./img/icone/Tendina.png"alt="immagine rappresentativa di una tendina di oggetti"/></li>
    <li id = "liMenuAPanino"><img id = "MenuAPanino" src="./img/icone/MenuAPanino.png"alt="menù a panino"/></li>
    <li id = "liMercatino" onmouseover="onHoverGenerico();" onmouseout="offHoverGenerico()"><a href="mercatino.php"><h1>Mercatino</h1><img id = "Mercatino" src="./img/icone/Mercatino.png"alt="immagine stilizzata di una bancarella"/></a></li>
    <li id = "liNomePagina"><h1><?php echo $templateParams["nomePagina"]; ?></h1></li><li id = "liSelectEvento"><select id="select"><option id="optionEvento" value="evento">Evento</option><option value="artista">Artista</option><option value="città">Città</option></select></li><li id="liCerca"><fieldset form="form1"><input id="inputCerca" type="text" name="username" value="Cerca"></fieldset></li><li id="liLente"   onclick="clickShowSelectCerca();"><a><img id="porcoddio" src="./img/icone/Lente.png"alt="lente di ingrandimento per la ricerca"/></a></li>
    <li id = "liLogoAltoDx" ><a href="index.php"><img id = "LogoDx" src="./img/Logo.png"alt="logo MaTTicket"/></a></li>
    <li id = "liAccount" onmouseover="onHoverGenerico();" onmouseout="offHoverGenerico()"><a href="logIn.php"><h1>Account</h1><img id = "Account" src="./img/icone/Account.png"alt="immagine stilizzata di un omino"/></a></li>
    <li id = "liCarrello" onmouseover="onHoverGenerico();" onmouseout="offHoverGenerico()"><a href="carrello.php"><h1>Carrello</h1><img id = "Carrello" src="./img/icone/Carrello.png"alt="immagine stilizzata di un carrello"/></a></li>
</ul>