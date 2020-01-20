<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoInfo.php";
$templateParams["nomePagina"] = "INFO";

$templateParams["csss"] = $linkingCss->linkingCss("info");

$templateParams["emails"] = $dbh->getAdmEMails();

require("template/base.php");
?>