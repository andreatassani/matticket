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
        $stmt = $this->db->prepare("SELECT nomeA, nomeE, immagineE, prezzo
                                    FROM evento, artista 
                                    WHERE categoria = ?
                                    AND IDartista = IDartistaE");
        $stmt->bind_param('s', $nomeCategoria);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getExpiringEvents(){
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo
                                    FROM artista, evento, giorno 
                                    WHERE giornata between CURDATE() and CURDATE()+11 
                                    AND IDartista = IDartistaE
                                    AND IDeventoE = IDevento");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getMostRequiredEvents(){
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo 
                                    FROM artista, evento, giorno 
                                    WHERE IDartista = IDartistaE 
                                    AND IDeventoE = IDevento 
                                    ORDER BY postiL/postiT ASC LIMIT 10");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEventsByArtist($nomeArtista) {
        $stmt = $this->db->prepare("SELECT nomeA, nomeE, immagineE, prezzo
                                    FROM artista, evento, date 
                                    WHERE nomeA = ? 
                                    AND IDartista = IDartistaE
                                    AND IDeventoE = IDevento");
        $stmt->bind_param('s', $nomeArtista);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getExpiringEventsByCategory($nomeCategoria) {
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo 
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
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo
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
        $stmt = $this->db->prepare("SELECT DISTINCT nomeA, nomeE, immagineE, prezzo
                                    FROM artista, evento, giorno 
                                    WHERE genere = ? 
                                    AND IDartista = IDartistaE
                                    AND IDeventoE = IDevento");
        $stmt->bind_param('s', $nomeSubCat);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
  
}
?>