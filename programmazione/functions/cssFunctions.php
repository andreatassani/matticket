<?php
    class cssFunctions{
        public function linkingCss($nomeTemplate){
            switch($nomeTemplate){
                case 'evento' : return $csss = array("./css/utili/article.css","./css/utili/linkEsterni.css","./css/evento.css");
                case 'categoria' : return $csss = array("./css/utili/locandine.css");
                case 'index' : return $csss = array("./css/utili/locandine.css");
                case 'infoEvento' : return $csss = array("./css/maggioriInfoEvento.css","./css/utili/bottoni.css");
                case 'artista' : return $csss = array("./css/utili/article.css","./css/utili/locandine.css","./css/utili/bottoni.css");
                case 'info' : return $csss = array("./css/utili/article.css","./css/utili/linkEsterni.css");
                case 'signIn' : return $csss = array("./css/utili/bottoni.css","./css/utili/form.css","./css/utili/tabella.css","./css/utili/inputImg.css");
                case 'logIn' : return $csss = array("./css/utili/bottoni.css","./css/logIn.css");
                case 'account' : return $csss = array("./css/utili/bottoni.css","./css/utili/tabella.css","./css/utili/form.css");
            }
        }
    }
?>