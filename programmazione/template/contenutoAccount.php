<?php
$preferenze = '<div>
    <ul id="intestazione">                
            <li><h2>Preferenze</h2></li>
            <li id="liLogoSubCat"><img src = "./img/icone/Preferenze.png" alt="immagine rappresentativa di un uomo con un cuore sul petto"/></a></li>
    </ul>
    <ul id="tabella" class="tabellaAccount">
        <table>
            <tbody>
                <tr><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td></tr>
                <tr><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td></tr>
                <tr><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td><td><label class="container"><p>One</p><input type="checkbox" checked="checked"></label></td></tr>
            </tbody>
        </table>
        <button class = "buttonMain"><a href="account.html">Aggiorna Preferenze</a></button>
    </ul>
</div>';
$nuovoEvento = '<button class = "buttonMain"><a href="nuovoEvento.php">Crea Nuovo Evento</a></button>'
?>
<?php foreach($templateParams["infoUser"] as $user): ?>
<?php
    $nickname = $user["nickname"];
    $nome = $user["nomeU"];
    $cognome = $user["cognomeU"];
    $tipoAccount = $user["tipoaccount"];
    $email = $user["email"];
    $immagine = $user["immagineU"];
?>
<?php endforeach; ?>
<div>
    <ul id="intestazione">
        <li><a><h2>Dati Personali</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Dettagli.png" alt="immagine rappresentativa un foglio scritto e di una lente d'ingrandimento"/></a></li>
    </ul>
    <ul id="listaForm">
        <li id="liImg"><img src=<?php echo "./img/profilo/".$immagine?> alt="immagine profilo"></li>
        <li><label class="labelAccount" for=”insNickName″>Nick Name:</label><label class="labelInfo"><?php echo $nickname?></label></li>
        <li><label class="labelAccount" for=”insNome″>Nome:</label><label class="labelInfo"><?php echo $nome?></label></li>
        <li><label class="labelAccount" for=”insCognome″>Cognome:</label><label class="labelInfo"><?php echo $cognome?></label></li>
        <li><label class="labelAccount" for=”insTipo″>Tipologia Account:</label><label class="labelInfo"><?php echo $tipoAccount?></label></li>
        <li><label class="labelAccount" for=”insEmail″>Email:</label><label class="labelInfo"><?php echo $email?></label></li>
    </ul>
</div>
<?php if($tipoAccount != "amministratore"){ echo $preferenze; }?>
<div>
    <?php if($tipoAccount != "cliente"){ echo $nuovoEvento; }?>
    <button class = "buttonMain"><a href="logout.php">Log Out</a></button>
</div>