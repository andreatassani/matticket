<?php
require_once("dbh.php");

$templateParams["csss"] = $linkingCss->linkingCss("carrello");
$templateParams["nomePagina"] = "CARRELLO";

if(isset($_SESSION["nickname"])){
$templateParams["contenuto"]="contenutoCarrello.php";
$templateParams["eventiAggiunti"] =$dbh-> getEventAddedOnCartByIDutente($_SESSION["IDutente"]);

$preferenze = $dbh->getPreferences($_SESSION["IDutente"]);
    $n = 0;
    $templateParams["locandine"] = array();
    //var_dump($preferenze[0]);
    if($preferenze[0]["cabaret"] == 1){
    $cabaret = $dbh->getEventsByGenre("cabaret");
    foreach($cabaret as $evento){
        $templateParams["locandine"][$n] = $evento;
        $n++;
    }
    }
    if($preferenze[0]["musical"] == 1){
    $cabaret = $dbh->getEventsByGenre("musical");
    foreach($cabaret as $evento){
        $templateParams["locandine"][$n] = $evento;
        $n++;
    }
    }
    if($preferenze[0]["partite"] == 1){
    $cabaret = $dbh->getEventsByGenre("partite");
    foreach($cabaret as $evento){
        $templateParams["locandine"][$n] = $evento;
        $n++;
    }
    }
    if($preferenze[0]["manifestazioni"] == 1){
    $cabaret = $dbh->getEventsByGenre("manifestazioni");
    foreach($cabaret as $evento){
        $templateParams["locandine"][$n] = $evento;
        $n++;
    }
    }
    if($preferenze[0]["internazionali"] == 1){
    $cabaret = $dbh->getEventsByGenre("internazionali");
    foreach($cabaret as $evento){
        $templateParams["locandine"][$n] = $evento;
        $n++;
    }
    }
    if($preferenze[0]["italiane"] == 1){
    $cabaret = $dbh->getEventsByGenre("italiane");
    foreach($cabaret as $evento){
        $templateParams["locandine"][$n] = $evento;
        $n++;
    }
    }
    if($preferenze[0]["fotografia"] == 1){
    $cabaret = $dbh->getEventsByGenre("fotografia");
    foreach($cabaret as $evento){
        $templateParams["locandine"][$n] = $evento;
        $n++;
    }
    }
    if($preferenze[0]["pittura"] == 1){
    $cabaret = $dbh->getEventsByGenre("pittura");
    foreach($cabaret as $evento){
        $templateParams["locandine"][$n] = $evento;
        $n++;
    }
    }
} else {
    header("location:logIn.php");
}

require("template/base.php");
?>
