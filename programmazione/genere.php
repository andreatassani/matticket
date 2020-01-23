<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoGenere.php";
$templateParams["genere"] = $_GET["genere"];

$templateParams["nomePagina"] = strtoupper($templateParams["genere"]);


$templateParams["ris"]=$dbh->getEventsBySubCat2($templateParams["genere"]);

$templateParams["csss"] = $linkingCss->linkingCss("genere");

require("template/base.php");
?>