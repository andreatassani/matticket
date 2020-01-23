<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoInfoEvento.php";
$templateParams["nomePagina"] = "INFO EVENTO";

$templateParams["IDevento"] = $_GET["IDevento"];
$templateParams["dataEvento"] = $_GET["dataEvento"];

$templateParams["csss"] = $linkingCss->linkingCss("infoEvento");
$templateParams["infoData"] = $dbh->getInfoEventByDate($templateParams["IDevento"], $templateParams["dataEvento"]);
if (isset($_GET["pressed"])){
    if(count($dbh-> checkAlreadyExistingEventInCart($_SESSION["IDutente"], $_GET["IDevento"], $_GET["giornata"])) == 0){
        $dbh-> insertCartByIDutente($_SESSION["IDutente"], $_GET["IDevento"], $_GET["giornata"]);
    } else {
        $dbh-> updateQuantity($_SESSION["IDutente"], $_GET["IDevento"], $_GET["giornata"], 1);
    }
    
    header("location:carrello.php");
}


require("template/base.php");
?>