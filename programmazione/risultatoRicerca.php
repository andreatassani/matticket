<?php
require_once("dbh.php");


$templateParams["nomePagina"] = "RICERCA";

$templateParams["csss"] = $linkingCss->linkingCss("ricerca");
if(isset($_GET["messaggio"])){
$templateParams["messaggio"] = $_GET["messaggio"];
$messaggioSpazi = str_replace("%20", " ", $_GET["messaggio"]);
$messaggioSpazi = '%'.$messaggioSpazi.'%';
}

if(isset($_GET["evento"])){
    $templateParams["tipo"] = "Eventi";
    $templateParams["contenuto"]="contenutoRisultatoEventi.php";
    $templateParams["ris"] = $dbh->searchEvents($messaggioSpazi);
} else if(isset($_GET["artista"])){
    $templateParams["tipo"] = "Artisti";
    $templateParams["contenuto"]="contenutoRisultatoArtista.php";
    $templateParams["ris"] = $dbh->searchArtists($messaggioSpazi);
} else if(isset($_GET["città"])){
    $templateParams["tipo"] = "Città";
    $templateParams["contenuto"]="contenutoRisultatoCitta.php";
    $templateParams["ris"] = $dbh->searchCity($messaggioSpazi);
}

if(isset($_GET["google"])){
    header("location:https://www.google.com/search?source=hp&ei=r9QpXvW6C6yflwTB0qnoDQ&q=".$_GET["mes"]."&oq=".$_GET["mes"]);
}

require("template/base.php");
?>