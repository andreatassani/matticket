<?php
    class cssFunctions{
        public function linkingCss($nomeTemplate){
            switch($nomeTemplate){
                case 'evento' : return $csss = array("./css/utili/article.css","./css/utili/linkEsterni.css","./css/evento.css");
                case 'index' : return $csss = array("./css/utili/locandine.css");
                case 'categoria' : return $csss = array("./css/utili/locandine.css");
                case 'infoEvento' : return $csss = array("./css/maggioriInfoEvento.css","./css/utili/bottoni.css");
                case 'artista' : return $csss = array("./css/utili/article.css","./css/utili/locandine.css","./css/utili/bottoni.css");
            }
        }
    }
?>