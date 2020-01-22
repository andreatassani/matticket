<?php
error_reporting(E_ERROR|E_WARNING|E_PARSE);
require_once("dbh.php");

$templateParams["contenuto"]="contenutoAccount.php";
$templateParams["nomePagina"] = "ACCOUNT";
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