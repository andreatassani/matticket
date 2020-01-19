<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoEvento.php";
$templateParams["nomePagina"] = "EVENTO";

$templateParams["IDevento"] = $_GET["IDevento"];

$templateParams["csss"] = $linkingCss->linkingCss("evento");
$templateParams["infoEvento"] = $dbh->getInfoEvent($templateParams["IDevento"]);
$templateParams["dateEvento"] = $dbh->getDateEvent($templateParams["IDevento"]);

require("template/base.php");
?>