<form action="#" method ="POST" enctype="multipart/form-data">
<?php if(isset($templateParams["erroreSignIn"])): ?>
<p><?php echo $templateParams["erroreSignIn"]; ?></p>
<?php endif; ?>
<div>
    <ul id="intestazione" id="formSignIn">
        <li><a><h2>Dati Personali</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Dettagli.png" alt="immagine rappresentativa un foglio scritto e di una lente d'ingrandimento"/></a></li>
    </ul>
    <ul id="listaForm">
        <li><label for="Nome">Nome:</label><input id="Nome" name="Nome"class="form"/></li>
        <li><label for="Cognome">Cognome:</label><input id="Cognome" name="Cognome" class="form"/></li>
        <li><label for="NickName">Nick Name:</label><input id="NickName" name="NickName" class="form"/></li>
        <li><label for="Tipo">Tipologia Account:</label><select id="TipoAccount" name="TipoAccount" class="form"><option value="cliente">Cliente</option><option value="organizzatore">Organizzatore</option></select></li>
        <li><label for="Email">Email:</label><input id="Email" name="Email" class="form"/></li>
        <li><label for="Password">Password:</label><input id="Password" name="Password" class="form" type="password"/></li>
        <li><label for="RePassword">Reinserisci Password:</label><input id="RePassword" name="RePassword" class="form" type="password"/></li>
        </ul>
</div>
<div>
    <ul id="intestazione">
            <li><a><h2>Preferenze?</h2></a></li>
            <li id="liLogoSubCat"><img src = "./img/icone/Preferenze.png" alt="immagine rappresentativa di un uomo con un cuore sul petto"/></a></li>
        </ul><ul id="tabella">
            <table>
                <tbody>
                    <tr><td><label class="container" ><p>Cabaret</p><input name="cabaret" type="checkbox"></label></td><td><label class="container"><p>Musical</p><input name="musical" type="checkbox" ></label></td></tr>
                    <tr><td><label class="container"><p>Internazionali</p><input name="internazionali" type="checkbox"></label></td><td><label class="container"><p>Italiane</p><input name="italiane" type="checkbox" ></label></td></tr>
                    <tr><td><label class="container"><p>Partite</p><input name="partite" type="checkbox" ></label></td><td><label class="container"><p>Manifestazioni</p><input name="manifestazioni" type="checkbox" ></label></td></tr>
                    <tr><td><label class="container"><p>Fotografia</p><input name="fotografia" type="checkbox" ></label></td><td><label class="container"><p>Pittura</p><input name="pittura" type="checkbox" ></label></td></tr>
                </tbody>
            </table>
        </ul>
</div>
<div>
    <ul id="intestazione">
        <li><a><h2>Immagine</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Disegno.png" alt="immagine rappresentativa di un disegno"/></a></li>
    </ul>
    <ul id="immagine">
        <li id = "liImmagineProf"><img id="ImmagineProf"src="./img/icone/ImmagineVuota.png" alt=""></li>
        <li><input type="file" name="fileToUpload" id="file" onchange="document.getElementById('ImmagineProf').src = window.URL.createObjectURL(this.files[0])"></li>
        <!--<li><input type="submit" value="Upload Image" name="submit" id="file"></li>-->
    </ul>
</div>
<div>
    <button type="submit" name="submit" value="Upload Image" class = "buttonMain" >Termina e Accedi</button>
</div>
</form>
