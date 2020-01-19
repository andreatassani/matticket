<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoCategoria.php";
$templateParams["nomeCategoria"]=$_GET["nomeCategoria"];
$templateParams["nomePagina"] = strtoupper($templateParams["nomeCategoria"]);

$templateParams["nomeSubCat1"]= $dbh->getSubCatByCat($templateParams["nomeCategoria"], 1);
$templateParams["nomeSubCat2"]= $dbh->getSubCatByCat($templateParams["nomeCategoria"], 2);

$templateParams["eventiPiuRichiestiCategoria"]=$dbh->getMostRequiredEventsByCategory($templateParams["nomeCategoria"]);
$templateParams["eventiInScadenzaCategoria"]=$dbh->getExpiringEventsByCategory($templateParams["nomeCategoria"]);
$templateParams["eventiSubCat1"]=$dbh->getEventsBySubCat($templateParams["nomeSubCat1"]);
$templateParams["eventiSubCat2"]=$dbh->getEventsBySubCat($templateParams["nomeSubCat2"]);

$templateParams["csss"] = $linkingCss->linkingCss("categoria");

require("template/base.php");
?>