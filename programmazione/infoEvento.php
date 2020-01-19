<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoInfoEvento.php";
$templateParams["nomePagina"] = "INFO EVENTO";

$templateParams["IDevento"] = $_GET["IDevento"];
$templateParams["dataEvento"] = $_GET["dataEvento"];

$templateParams["csss"] = $linkingCss->linkingCss("infoEvento");
$templateParams["infoData"] = $dbh->getInfoEventByDate($templateParams["IDevento"], $templateParams["dataEvento"]);

require("template/base.php");
?>