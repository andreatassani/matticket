<?php
    session_start();
    define("UPLOAD_PROFILO", "./img/profilo/");
    define("UPLOAD_ARTISTA", "./img/artisti/");
    define("UPLOAD_EVENTO", "./img/locandine/");

    require_once("./db/database.php");
    $dbh = new DatabaseHelper("localhost","root","","matticket");
    require_once("./functions/cssFunctions.php");
    $linkingCss = new cssFunctions();
    require_once("./functions/coockieFunctions.php");
    $coockie = new cocokieFunctions();
    require_once("./functions/utils.php");
    $utils = new utils();
?>