<?php
require_once("dbh.php");

$templateParams["contenuto"]="contenutoAccount.php";
$templateParams["nomePagina"] = "ACCOUNT";

$templateParams["infoUser"] = $dbh->getInfoByNickname($_GET["nickname"]);
$templateParams["csss"] = $linkingCss->linkingCss("account");

require("template/base.php");
?>