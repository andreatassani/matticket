<form action="#" method ="POST" enctype="multipart/form-data">
<div>
    <ul id="intestazione">
        <li><a><h2>Dettagli</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Dettagli.png" alt="immagine rappresentativa di un foglio di carta"/></a></li>
    </ul>
    <ul id="oggetti">
        <li><label for="insArtista">Artista:</label><select id="insArtista" name="insArtista" class="form">
            <?php foreach($templateParams["artisti"] as $artista): ?>
                <option value="<?php echo $artista["nomeA"]?>" ><?php echo $artista["nomeA"]?></option>
            <?php endforeach; ?> 
            </select> 
        </li>
        <li><label for="insGenere">Genere:</label><select id="insGenere" name="insGenere" class="form">
            <option value="cabaret">Cabaret</option><option value="musical">Musical</option>
            <option value="partite">Partite</option><option value="manifestazioni">Manifestazioni</option>
            <option value="internazionali">Internazionali</option><option value="italiane">Italiane</option>
            <option value="fotografia">Fotografia</option><option value="pittura">Pittura</option>
        </select></li>
        <li><label for="insTitolo">Titolo:</label><input id="insTitolo" name="insTitolo" class="form"/></li>
        <li><label for="insData">Data e orario:</label><input type="datetime-local" id="insData" name="insData" class="form"/></li>
        <li><label for="insCittà">Città:</label><input id="insCittà" name="insCittà" class="form"/></li>
        <li><label for="insLuogo">Luogo:</label><input id="insLuogo" name="insLuogo" class="form"/></li>
        <li><label for="insPosti">Posti:</label><input id="insPosti" name="insPosti" class="form"/></li>
        <li><label for="insPrezzo">Prezzo Biglietto:</label><input id="insPrezzo" name="insPrezzo" class="form"/></li>
        </ul>
</div>
<div>
    <ul id="intestazione">
        <li><a><h2>Descrizione</h2></a></li>
        <li id="liLogoSubCat"><img src = "./img/icone/Nuvoletta.png" alt="immagine rappresentativa di una nuvoletta"/></a></li>
    </ul>
    <ul id="descrizione">
        <textarea name="desc" id="insDesc" cols="" rows=""></textarea>
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
    </ul>
</div>
<div>
    <button type="submit" name="submit" value="Upload Image" class = "buttonMain" >Crea Evento</button>
</div>
</form>

