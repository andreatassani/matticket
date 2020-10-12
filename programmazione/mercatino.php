<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoMercatino.php";
if($coockie->isUserLoggedIn()){

$templateParams["nomePagina"] = "MERCATINO";


if(isset($_GET["vendesi"])){
    $dbh->sellEventToTheCommunityThroughCommunity($_SESSION["IDutente"],$_GET["IDevento"] , $_GET["giornata"]);
}

$templateParams["ris"]=$dbh->getEventsInMarket();

$templateParams["csss"] = $linkingCss->linkingCss("mercatino");


} else {
    
    header("location: ./logIn.php?noMercatino=1");
}
require("template/base.php");
?>
