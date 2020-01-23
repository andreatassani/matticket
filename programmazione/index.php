<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoIndex.php";
$templateParams["nomePagina"] = "HOME";

$templateParams["eventiTeatro"] = $dbh->getEventsByCategory("teatro");
$templateParams["eventiSport"] = $dbh->getEventsByCategory("sport");
$templateParams["eventiMusica"] = $dbh->getEventsByCategory("musica");
$templateParams["eventiMostre"] = $dbh->getEventsByCategory("mostre");
$templateParams["eventiInScadenza"] = $dbh->getExpiringEvents();
$templateParams["eventiPiuRichiesti"] = $dbh->getMostRequiredEvents();

$templateParams["csss"] = $linkingCss->linkingCss("index");



require("template/base.php");
?>