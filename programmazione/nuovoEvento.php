<?php
require_once("dbh.php");

$templateParams["csss"] = $linkingCss->linkingCss("nuovoEvento");
$templateParams["contenuto"]="contenutoNuovoEvento.php";
$templateParams["nomePagina"] = "NUOVO EVENTO";

$templateParams["artisti"]=$dbh->getAllArtists();


//controllo se parametri sono specificati
if(isset($_POST["insArtista"]) && isset($_POST["insGenere"]) && 
   isset($_POST["insTitolo"]) && isset($_POST["insData"]) &&
   isset($_POST["insCittà"]) && isset($_POST["insLuogo"])&&
   isset($_POST["insPosti"]) && isset($_POST["insPrezzo"]) &&
   isset($_POST["desc"])){

        $img = $_FILES["fileToUpload"];
        $imgName = str_replace(" ","", $img["name"]);
        $IDartista = $dbh->getIdByArtistName($_POST["insArtista"]);

        $categoria = $utils->getCategoryByGenre($_POST["insGenere"]);
        
        $dbh->insertNewEvent($IDartista[0]["IDartista"], $_POST["insTitolo"], $categoria, $_POST["insGenere"], $imgName, $_SESSION["IDutente"], $_POST["desc"], $_POST["insPrezzo"] );
        $utils->uploadImage($img, UPLOAD_EVENTO);

        $mappa = $utils->generateMapByPlace($_POST["insLuogo"]);
        $data = $utils->generateDBdateANDtime($_POST["insData"],0);
        $ora = $utils->generateDBdateANDtime($_POST["insData"],1);
        $IDevento = $dbh->getIDfromEventNameANDIDutenteANDIDartista($IDartista[0]["IDartista"], $_POST["insTitolo"], $_SESSION["IDutente"]);

        $dbh->insertNewDay($IDevento[0]["IDeventoE"], $data, $_POST["insLuogo"], $_POST["insCittà"], $ora, $_POST["insPosti"], $mappa);
        
        //header("location: ./logIn.php");
      } else {
        $templateParams["erroreSignIn"] = "Errore! Trovato un account registrato con l'email o il nickname specificati!";
}

require("./template/base.php");
?>