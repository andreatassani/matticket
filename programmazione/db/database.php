<?php
class DatabaseHelper{
    private $db;

    public function __construct($server,$user,$password,$db){
     $this->db = new mysqli($server,$user,$password,$db);
     if ($this->db->connect_error){
         die("La connessione è fallita D: :" . $db->connect_error);
     }
    }

    public function getEventsByCategory($nomeCategoria){
        $stmt = $this->db->prepare("SELECT nomeA, nomeE, immagineE, prezzo, IDeventoE, IDartistaE
                                    FROM evento, artista 
                                    WHERE categoria = ?
                                    AND IDartista = IDartistaE");
        $stmt->bind_param('s', $nomeCategoria);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getExpiringEvents(){
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo, IDeventoE, IDartistaE
                                    FROM artista, evento, giorno 
                                    WHERE giornata between CURDATE() and CURDATE()+11 
                                    AND IDartista = IDartistaE
                                    AND IDeventoE = IDevento");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getMostRequiredEvents(){
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo, IDeventoE, IDartistaE
                                    FROM artista, evento, giorno 
                                    WHERE IDartista = IDartistaE 
                                    AND IDeventoE = IDevento 
                                    ORDER BY postiL/postiT ASC LIMIT 10");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getExpiringEventsByCategory($nomeCategoria) {
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo, IDeventoE, IDartistaE
                                    FROM artista, evento, giorno 
                                    WHERE giornata between CURDATE() and CURDATE()+11 
                                    AND categoria = ? 
                                    AND IDartista = IDartistaE 
                                    AND IDeventoE = IDevento");
        $stmt->bind_param('s', $nomeCategoria);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getMostRequiredEventsByCategory($nomeCategoria) {        
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo, IDeventoE, IDartistaE
                                    FROM artista, evento, giorno 
                                    WHERE categoria = ? 
                                    AND IDartista = IDartistaE
                                    AND IDeventoE = IDevento 
                                    ORDER BY postiL/postiT ASC LIMIT 10");
        $stmt->bind_param('s', $nomeCategoria);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEventsBySubCat($nomeSubCat) {
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo, IDeventoE, IDartistaE
                                    FROM artista, evento, giorno 
                                    WHERE genere = ? 
                                    AND IDartista = IDartistaE
                                    AND IDeventoE = IDevento");
        $stmt->bind_param('s', $nomeSubCat);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getSubCatByCat($nomeCategoria, $pos) {

        if($pos == 1) {
            switch($nomeCategoria) {
                case 'teatro': return 'cabaret';
                case 'musica': return 'italiane';//i
                case 'sport': return 'partite';
                case 'mostre': return 'fotografia';
            }
        }
    
        if($pos == 2) {
            switch($nomeCategoria) {
                case 'teatro': return 'musical';
                case 'musica': return 'internazionali';//i
                case 'sport': return 'manifestazioni';//i
                case 'mostre': return 'pittura';   
            }
        }   
    }

    public function getInfoEvent($IDevento) {
        $stmt = $this->db->prepare("SELECT DISTINCT * 
                                    FROM artista, evento, utente
                                    WHERE IDeventoE = ? 
                                    AND IDartistaE = IDartista
                                    AND IDutente = IDorganizzatore");
        $stmt->bind_param('i', $IDevento);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDateEvent($IDevento) {
        $stmt = $this->db->prepare("SELECT * 
                                    FROM artista, evento, giorno 
                                    WHERE IDeventoE = ? 
                                    AND IDartistaE = IDartista 
                                    AND IDeventoE = IDevento");
        $stmt->bind_param('i', $IDevento);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getInfoEventByDate($IDevento, $dataEvento) {
        $stmt = $this->db->prepare("SELECT * 
                                    FROM artista, evento, giorno, utente
                                    WHERE IDeventoE = ? 
                                    AND IDartistaE = IDartista 
                                    AND IDeventoE = IDevento
                                    AND IDutente = IDorganizzatore
                                    AND giornata = ?");
        $stmt->bind_param('is', $IDevento, $dataEvento);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEventsByArtist($IDartista) {
        $stmt = $this->db->prepare("SELECT *
                                    FROM artista, evento 
                                    WHERE IDartista = ?
                                    AND IDartista = IDartistaE");
        $stmt->bind_param('i', $IDartista);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getInfoArtist($IDartista) {
        $stmt = $this->db->prepare("SELECT * 
                                    FROM artista
                                    WHERE IDartista = ?");
        $stmt->bind_param('i', $IDartista);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>