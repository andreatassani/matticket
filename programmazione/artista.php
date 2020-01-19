<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoArtista.php";
$templateParams["nomePagina"] = "ARTISTA";

$templateParams["IDartista"] = $_GET["IDartista"];

$templateParams["csss"] = $linkingCss->linkingCss("artista");

$templateParams["infoArtista"] = $dbh->getInfoArtist($templateParams["IDartista"]);
$templateParams["eventiArtista"] = $dbh->getEventsByArtist($templateParams["IDartista"]);

require("template/base.php");
?>