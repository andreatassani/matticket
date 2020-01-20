<form action="#" method="POST">
<?php if(isset($templateParams["errorelogin"])): ?>
<p><?php echo $templateParams["errorelogin"]; ?></p>
<?php endif; ?>
<div>
    <ul id="intestazione">
        <li><a><h2>Accedi</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Dettagli.png" alt="immagine rappresentativa un foglio scritto e di una lente d'ingrandimento"/></a></li>
    </ul>
    <ul id="oggetti">
        <li>
            <label for="nickname">Email / Nickname:</label><input id="nickname" name="nickname" type="text" class="form"/>
        </li>
        <li>
            <label for="password">Password:</label><input id="password" name="password" type="password" class="form"/>
        </li>
    </ul>   
</div>
<div>
    <button type="submit" name="submit" value="Invia" class = "buttonMain">Conferma</button>
    <button class = "buttonMain"><a href="signIn.php">Iscrivimi</a></button>
</div>
</form>

