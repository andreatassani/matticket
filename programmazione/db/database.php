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
                                    WHERE giornata between CURDATE() and CURDATE()+5 
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
                                    WHERE giornata between CURDATE() and CURDATE()+5 
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

    public function getAdmEMails(){
        $stmt = $this->db->prepare("SELECT email 
                                    FROM utente 
                                    WHERE tipoaccount = 'amministratore'");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getInfoByNickname($username){
        $stmt = $this->db->prepare("SELECT * 
                                    FROM utente 
                                    WHERE nickname = ?");
        $stmt->bind_param('s',$username);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    } 

    public function checkLogin($username, $password){
        $stmt = $this->db->prepare("SELECT *
                                    FROM utente 
                                    WHERE nickname = ? 
                                    AND password = ?");
        $stmt->bind_param('ss',$username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    } 

    public function checkNickAlreadyExist($nickname){
        $stmt = $this->db->prepare("SELECT *
                                    FROM utente 
                                    WHERE nickname = ?");
        $stmt->bind_param('s',$nickname);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkEmailAlreadyExist($email){
        $stmt = $this->db->prepare("SELECT *
                                    FROM utente
                                    WHERE email = ?");
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertNewUser($nome, $cognome, $nickname, $img, $tipoAccount, $email, $pass, $data) {
        $stmt = $this->db->prepare("INSERT INTO utente (IDutente, nomeU, cognomeU, nickname, immagineU, tipoaccount, email, password, dataregistrazione) 
                                    VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssssss',$nome, $cognome, $nickname, $img, $tipoAccount, $email, $pass, $data);
        $stmt->execute();
    }


    public function insertNewEvent($IDartista, $nome, $categoria, $genere, $img, $IDutente, $desc, $prezzo) {
        $stmt = $this->db->prepare("INSERT INTO evento (IDeventoE, IDartistaE, nomeE, categoria, genere, immagineE, IDorganizzatore, descrizioneE, prezzo) 
                                    VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('issssisi',$IDartista, $nome, $categoria, $genere, $img, $IDutente, $desc, $prezzo);
        $stmt->execute();
    }

    public function getIDfromEventNameANDIDutenteANDIDartista($IDartista, $nomeE, $IDorganizzatore){
        $stmt = $this->db->prepare("SELECT IDeventoE
                                    FROM evento
                                    WHERE IDartistaE = ?
                                    AND nomeE = ?
                                    AND IDorganizzatore = ?");
        $stmt->bind_param('isi',$IDartista, $nomeE, $IDorganizzatore);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertNewDay($IDevento, $data, $luogo, $città, $orario, $postiT, $mappa) {
        $stmt = $this->db->prepare("INSERT INTO giorno (IDevento, giornata, luogo, città, orario, postiT, postiL, mappa) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('issssiis',$IDevento, $data, $luogo, $città, $orario, $postiT, $postiT, $mappa);
        $stmt->execute();
    }

    public function getIdByArtistName($nome) {
        $stmt = $this->db->prepare("SELECT *
                                    FROM artista
                                    WHERE nomeA = ?");
        $stmt->bind_param('s',$nome);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllArtists(){
        $stmt = $this->db->prepare("SELECT nomeA, IDartista
                                    FROM artista 
                                    WHERE 1");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function setPreferences($IDutente, $array) {
        $stmt = $this->db->prepare("INSERT INTO preferenze (IDutente, cabaret, musical, partite, manifestazioni, internazionali, italiane, fotografia, pittura) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('iiiiiiiii',$IDutente, $array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7]);
        $stmt->execute();
    }

    public function getIDByEmail($email){
        $stmt = $this->db->prepare("SELECT IDutente
                                    FROM utente 
                                    WHERE email=?");
        $stmt->bind_param('s', $email);                           
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPreferences($IDutente){
        $stmt = $this->db->prepare("SELECT *
                                    FROM preferenze 
                                    WHERE IDutente=?");
        $stmt->bind_param('i', $IDutente);                           
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEventsByGenre($nomeGenere){
        $stmt = $this->db->prepare("SELECT nomeA, nomeE, immagineE, prezzo, IDeventoE, IDartistaE
                                    FROM evento, artista 
                                    WHERE genere = ?
                                    AND IDartista = IDartistaE");
        $stmt->bind_param('s', $nomeGenere);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>