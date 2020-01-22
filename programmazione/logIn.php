<?php
require_once("dbh.php");
if(isset($_POST["nickname"]) && isset($_POST["password"])){ 
    $pass = $utils->hashFunc($_POST["password"]);
    $login_result = $dbh->checkLogin($_POST["nickname"],$pass);
    if(count($login_result)==0){
        //Login fallito
        //$templateParams["errorelogin"] = "";
        $templateParams["errore"]='notify("Errore! nickname o password non corretti")';
        $templateParams["notifica"] = "notificaErrore.php";
    }else{
        $coockie->registerLoggedUser($login_result[0]);  
        $templateParams["notifica"] = NULL;
    }
}

if($coockie->isUserLoggedIn()){
    header("location: ./account.php?nickname=". $_SESSION["nickname"]);
} else {
    $templateParams["csss"] = $linkingCss->linkingCss("logIn");
    $templateParams["contenuto"]="contenutoLogIn.php";
    $templateParams["nomePagina"] = "LOG IN";
    require("./template/base.php");
}
?>