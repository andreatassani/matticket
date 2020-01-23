<?php
require_once("dbh.php");

$templateParams["csss"] = $linkingCss->linkingCss("signIn");
    $templateParams["contenuto"]="contenutoSignIn.php";
    $templateParams["nomePagina"] = "SIGN IN";

    
//controllo se parametri sono specificati
if(isset($_POST["Nome"]) && isset($_POST["Cognome"]) && 
   isset($_POST["NickName"]) && isset($_POST["Email"]) &&
   isset($_POST["Password"]) && isset($_POST["RePassword"])&&
   isset($_POST["TipoAccount"])){
     //controllo se le due password inserite sono diverse, mando errore, altrimenti continuo
     $pass = $utils->hashFunc($_POST["Password"]);
     $passReProva = $utils->hashFunc($_POST["RePassword"]);
     
    if ($pass != $passReProva) {
      $templateParams["errore"]='notify("Errore! Le due password inserite non corrispondono")';
      $templateParams["notifica"] = "notificaErrore.php";
    } else {
      //controllo se nel db è già registrato utente con stessa email e nickname
        $login_result1 = $dbh->checkNickAlreadyExist($_POST["NickName"]);
        $login_result2 = $dbh->checkEmailAlreadyExist($_POST["Email"]);
        if(count($login_result1)== 0 && count($login_result2) == 0){
          //nessuna corrispondenza trovata, procedere con registrazione
          $img = $_FILES["fileToUpload"];
          $imgName = str_replace(" ","", $img["name"]);
          $utils->uploadImage($img, UPLOAD_PROFILO);
          $data = date("Y/m/d");
          $dbh-> insertNewUser($_POST["Nome"], $_POST["Cognome"], $_POST["NickName"], $imgName, $_POST["TipoAccount"], $_POST["Email"], $pass, $data);
          $arrayOfPreferences = $utils->getArrayOfPreferences($_POST["cabaret"], $_POST["musical"], $_POST["partite"], $_POST["manifestazioni"], $_POST["internazionali"], $_POST["italiane"], $_POST["fotografia"],$_POST["pittura"]);
          $IDUtente = $dbh->getIDByEmail($_POST["Email"]);
          $dbh-> setPreferences($IDUtente[0]["IDutente"], $arrayOfPreferences);
          header("location: ./logIn.php");
        } else {
          $templateParams["errore"]='notify("Errore! trovato un account con nickname/email scelti")';
          $templateParams["notifica"] = "notificaErrore.php";
        }
      }  

}
require("./template/base.php");
?>