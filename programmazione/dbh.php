<?php
    session_start();
    require_once("./db/database.php");
    $dbh = new DatabaseHelper("localhost","root","","matticket");
    require_once("./functions/cssFunctions.php");
    $linkingCss = new cssFunctions();
    require_once("./functions/coockieFunctions.php");
    $coockie = new cocokieFunctions();
?>