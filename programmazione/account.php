<?php
error_reporting(E_ERROR|E_WARNING|E_PARSE);
require_once("dbh.php");


if($_SESSION["tipoAccount"] == "amministratore"){
    $templateParams["contenuto"]="contenutoAccountAmministratore.php";
} else {
    $templateParams["contenuto"]="contenutoAccount.php";
}

$templateParams["nomePagina"] = "ACCOUNT";

if(isset($_GET["acquistato"]) && $_GET["acquistato"] == 1){
    $templateParams["eventiAggiunti"] =$dbh-> getEventAddedOnCartByIDutente($_SESSION["IDutente"]);
    foreach($templateParams["eventiAggiunti"] as $evento){
        $giaAcquistato = $dbh->checkAlreadyExistingBoughtEvent($_SESSION["IDutente"], $evento["IDevento"], $evento["giornata"]);
        $dbh-> updateFreeChair($evento["quantità"], $evento["IDevento"], $evento["giornata"]);
        if(count($giaAcquistato) != 0){
            $dbh->updateQuantityBought($_SESSION["IDutente"], $evento["IDevento"], $evento["giornata"], $evento["quantità"]);
            $dbh->deleteBoughtTicket($_SESSION["IDutente"], $evento["IDevento"], $evento["giornata"]);
        } else {
            $dbh->updateBought($_SESSION["IDutente"], $evento["IDevento"], $evento["giornata"]);
        }
       
    }
}

if(isset($_GET["confermato"])){
    $dbh->addOrganizer($_GET["IDorganizzatore"]);
}

$templateParams["ris"]=$dbh->getOrganizers();

if(isset($_GET["mercatino"])){
    $dbh->updateMarket($_SESSION["IDutente"], $_GET["IDevento"], $_GET["giornata"], $_GET["IDvenditore"]);
}



$templateParams["eventiAcquistati"] =$dbh->getEventBoughtByIDutente($_SESSION["IDutente"]);

if($SESSION_["tipoAccount"] != "amministratore"){
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
    
    
}

$templateParams["infoUser"] = $dbh->getInfoByNickname($_SESSION["nickname"]);
$templateParams["csss"] = $linkingCss->linkingCss("account");

require("template/base.php");
?>