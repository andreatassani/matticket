<?php
require_once("dbh.php");

error_reporting(E_ERROR|E_WARNING|E_PARSE);

$templateParams["csss"] = $linkingCss->linkingCss("carrello");
$templateParams["nomePagina"] = "CARRELLO";

if(isset($_SESSION["nickname"])){
$templateParams["contenuto"]="contenutoCarrello.php";

if(isset($_GET["svuota"]) && $_GET["svuota"] == 1){
    $dbh->removeEventByIDutente($_SESSION["IDutente"]);
}

if(isset($_GET["eliminaEvento"]) && isset($_GET["IDevento"]) && isset($_GET["giornata"])){
    $dbh->deleteBoughtTicket($_SESSION["IDutente"], $_GET["IDevento"], $_GET["giornata"]);
}


if(isset($_GET["aggiungi"])){
    $dbh->updateQuantity($_SESSION["IDutente"], $_GET["IDevento"], $_GET["giornata"], 1);
}

if(isset($_GET["togli"])){
$quantità = ($dbh-> checkAlreadyExistingEventInCart($_SESSION["IDutente"], $_GET["IDevento"], $_GET["giornata"]));
        $quantità = $quantità[0]["quantità"];
    
}

if(isset($_GET["togli"]) && $quantità != 1){
    $dbh->updateQuantity($_SESSION["IDutente"], $_GET["IDevento"], $_GET["giornata"], -1);
}



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
