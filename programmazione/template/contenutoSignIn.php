<form action="#" method ="POST">
<div>
    <ul id="intestazione" id="formSignIn">
        <li><a><h2>Dati Personali</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Dettagli.png" alt="immagine rappresentativa un foglio scritto e di una lente d'ingrandimento"/></a></li>
    </ul>
    <ul id="listaForm">
        <li><label for="Nome">Nome:</label><input id="Nome" name="Nome"class="form"/></li>
        <li><label for="Cognome">Cognome:</label><input id="Cognome" name="Cognome" class="form"/></li>
        <li><label for="NickName">Nick Name:</label><input id="NickName" name="NickName" class="form"/></li>
        <li><label for="Tipo">Tipologia Account:</label><select id="TipoAccount" name="TipoAccount" class="form"><option value="Cliente">Cliente</option><option value="Organizzatore">Organizzatore</option></select></li>
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
                    <tr><td><label class="container"><p>Internazionale</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td></tr>
                    <tr><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td></tr>
                    <tr><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td></tr>
                    <tr><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td></tr>
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
        <li><input type="file" id="file" name="file" accept=".png, .jpg, .jpeg" onchange="document.getElementById('ImmagineProf').src = window.URL.createObjectURL(this.files[0])"></li>
    </ul>
</div>
<div>
    <button type="submit" name="submit" value="Invia" class = "buttonMain">Termina e Accedi</button>
</div>
</form>