<?php
    class cocokieFunctions{
        public function registerLoggedUser($user){
            $_SESSION["IDutente"] = $user["IDutente"];
            $_SESSION["nickname"] = $user["nickname"];
            $_SESSION["email"] = $user["email"];
        }

        function isUserLoggedIn(){
            return !empty($_SESSION['nickname']);
        }
    }
?>