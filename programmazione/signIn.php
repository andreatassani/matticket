<?php
require_once("dbh.php");

$templateParams["csss"] = $linkingCss->linkingCss("signIn");
    $templateParams["contenuto"]="contenutoSignIn.php";
    $templateParams["nomePagina"] = "SIGN IN";

if(isset($_POST["Nome"]) && isset($_POST["Cognome"]) && 
   isset($_POST["NickName"]) && isset($_POST["Email"]) &&
   isset($_POST["Password"]) && isset($_POST["RePassword"])&&
   isset($_POST["TipoAccount"])){
    if($_POST["Password"] == ($_POST["RePassword"])) {
        $templateParams["erroreSignIn"] = "Errore! Le due password inserite non corrispondono";
    } else {
        $login_result = $dbh->checkAlreadyExist($_POST["NickName"], $_POST["Email"]);
        if(count($login_result)== 0){
        //nessuna corrispondenza trovata, procedere con registrazione
        $templateParams["erroreSignIn"] = "";
        $dbh-> insertNewUser($_POST["Nome"], $_POST["Cognome"], $_POST["NickName"], "taax.jpg", date("Y/m/d"), $_POST["TipoAccount"], $_POST["Email"], 0, $_POST["Password"] ,0 );
        header("location: ./logIn.php");
      } else {
        $templateParams["erroreSignIn"] = "Errore! Trovato un account registrato con l'email o il nickname specificati!";
      }
    }  
}

require("./template/base.php");
?>