<?php
    class cocokieFunctions{
        public function registerLoggedUser($user){
            $_SESSION["nickname"] = $user["nickname"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["tipoAccount"] = $user["tipoaccount"];
            $_SESSION["IDutente"] = $user["IDutente"];
        }

        function isUserLoggedIn(){
            return !empty($_SESSION['nickname']);
        }
    }
?>