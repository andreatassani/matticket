<?php
require_once("dbh.php");
if(isset($_POST["nickname"]) && isset($_POST["password"])){ 
    $pass = $utils->hashFunc($_POST["password"]);
    $login_result = $dbh->checkLogin($_POST["nickname"],$pass);
    if(count($login_result)==0){
        //Login fallito
        $templateParams["errore"]='notify("Errore! nickname o password non corretti")';
        $templateParams["notifica"] = "notificaErrore.php";
    }else{
        $IDutente=$dbh->getIDutente($_POST["nickname"]);
        $IDutente = $IDutente[0]["IDutente"];
        $isAnOrganizer=$dbh->isAnOrganizer($IDutente);
        $isAnOrganizer = $isAnOrganizer[0]["tipoaccount"];
         if($isAnOrganizer != "organizzatore"){
        $coockie->registerLoggedUser($login_result[0]);  
        $templateParams["notifica"] = NULL;
        } else{
            $confermato = $dbh->isAConfirmedOrganizer($IDutente);
            $confermato = $confermato[0]["confermato"];
            if($confermato == 1){
                $coockie->registerLoggedUser($login_result[0]);  
                $templateParams["notifica"] = NULL;
            } else {
                $templateParams["errore"]='notify("Errore! il suo account non è ancora stato accettato, la contatteremo per mail al momento della conferma ")';
                $templateParams["notifica"] = "notificaErrore.php";
            }
        }
    }
}

if(isset($_GET["noMercatino"])){
    $templateParams["errore"]='notify("Per visitare la pagina MERCATINO occorre effettuare il login")';
    $templateParams["notifica"] = "notificaErrore.php";
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