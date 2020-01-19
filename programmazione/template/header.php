<ul id = "ulHeader"class="Cerca">
            <li id = "liLogoAltoSx" ><a href="index.html"><img id = "LogoSx" src="./img/LogoArancione.png"alt="logo MaTTicket"/></a></li>
            <li class="dropdown" onmouseover="onHoverCategorie();" onmouseout="offHoverCategorie();">
                <button class="dropbtn">Categorie <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="teatro.html">Teatro<img src = "./img/icone/Teatro.png" alt="immagine stilizzata di una maschera da teatro"/></a>
                    <a href="musica.html">Musica<img src = "./img/icone/Musica.png" alt="immagine di una chiave di violino"/></a>
                    <a href="sport.html">Sport<img src = "./img/icone/Sport.png" alt="immagine stilizzata di un pallone da calcio"/></a>
                    <a href="mostre.html">Mostre<img src = "./img/icone/Mostre.png" alt="immagine stilizzata del quadro 'L'Urlo di Munch'"/></a>
                </div>
            </li>
            <li id = "liTendina"><img id = "Tendina" src="./img/icone/Tendina.png"alt="immagine rappresentativa di una tendina di oggetti"/></li>
            <li id = "liMenuAPanino"><img id = "MenuAPanino" src="./img/icone/MenuAPanino.png"alt="menù a panino"/></li>
            <li id = "liMercatino" onmouseover="onHoverGenerico();" onmouseout="offHoverGenerico()"><a href="./html/mercatino.html"><h1>Mercatino</h1><img id = "Mercatino" src="./img/icone/Mercatino.png"alt="immagine stilizzata di una bancarella"/></a></li>
            <li id = "liNomePagina"><h1><?php echo $templateParams["nomePagina"]; ?></h1></li><li id = "liSelectEvento"><select><option value="Evento">Evento</option><option value="Artista">Artista</option><option value="Data">Data</option><option value="Città">Città</option></select></li><li id="liCerca"><fieldset form="form1"><input id="inputCerca" type="text" name="username" value="Cerca"></fieldset></li><li id="liLente"   onclick="clickShowSelectCerca();"><a><img src="./img/icone/Lente.png"alt="lente di ingrandimento per la ricerca"/></a></li>
            <li id = "liLogoAltoDx" ><a href="index.html"><img id = "LogoDx" src="./img/LogoArancione.png"alt="logo MaTTicket"/></a></li>
            <li id = "liAccount" onmouseover="onHoverGenerico();" onmouseout="offHoverGenerico()"><a href="logIn.html"><h1>Account</h1><img id = "Account" src="./img/icone/Account.png"alt="immagine stilizzata di un omino"/></a></li>
            <li id = "liCarrello" onmouseover="onHoverGenerico();" onmouseout="offHoverGenerico()"><a href="carrello.html"><h1>Carrello</h1><img id = "Carrello" src="./img/icone/Carrello.png"alt="immagine stilizzata di un carrello"/></a></li>
        </ul>