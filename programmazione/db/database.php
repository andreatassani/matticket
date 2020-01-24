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

    public function getEventsBySubCat2($nomeSubCat) {
        $stmt = $this->db->prepare("SELECT DISTINCT *
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

    public function  insertCartByIDutente($utente, $evento, $giornata) {
        $stmt = $this->db->prepare("INSERT INTO carrello (IDutenteC, IDeventoC, giornataC, quantità, acquistato) VALUES (?, ?, ?, 1, 0)");
        $stmt->bind_param('iis',$utente, $evento, $giornata);
        $stmt->execute();
    }

    public function getEventAddedOnCartByIDutente($utente) {
        $stmt = $this->db->prepare("SELECT *
                                    FROM evento, giorno, carrello, artista
                                    WHERE IDutenteC = ?
                                    AND acquistato = 0
                                    AND IDeventoC = IDeventoE
                                    AND IDartistaE = IDartista
                                    AND giornataC = giornata");
        $stmt->bind_param('i', $utente);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function removeEventByIDutente($utente) {
        $stmt = $this->db->prepare("DELETE 
                                    FROM carrello
                                    WHERE IDutenteC = ?
                                    AND acquistato = 0");
        $stmt->bind_param('i', $utente);
        $stmt->execute();
    }

    public function getEventBoughtByIDutente($utente) {
        $stmt = $this->db->prepare("SELECT *
                                    FROM evento, giorno, carrello, artista
                                    WHERE IDutenteC = ?
                                    AND acquistato = 1
                                    AND IDeventoC = IDeventoE
                                    AND IDartistaE = IDartista
                                    AND giornataC = giornata");
        $stmt->bind_param('i', $utente);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkAlreadyExistingEventInCart($IDutente, $IDevento, $giornata){
        $stmt = $this->db->prepare("SELECT *
                                    FROM carrello
                                    WHERE IDutenteC = ?
                                    AND acquistato = 0
                                    AND IDeventoC = ?
                                    AND giornataC = ?");
        $stmt->bind_param('iis', $IDutente, $IDevento, $giornata);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function updateQuantity($IDutente, $IDevento, $giornata, $numero){
        $stmt = $this->db->prepare("UPDATE carrello SET quantità= quantità+?
                                    WHERE IDutenteC = ?
                                    AND acquistato = 0
                                    AND IDeventoC = ?
                                    AND giornataC = ?");
        $stmt->bind_param('iiis',$numero, $IDutente, $IDevento, $giornata);
        $stmt->execute();

    }

    public function updateBought($IDutente, $IDevento, $giornata){
        $stmt = $this->db->prepare("UPDATE carrello SET acquistato= 1
                                    WHERE IDutenteC = ?
                                    AND IDeventoC = ?
                                    AND giornataC = ?");
        $stmt->bind_param('iis', $IDutente, $IDevento, $giornata);
        $stmt->execute();
    }

    public function updateQuantityBought($IDutente, $IDevento, $giornata, $quantità){
        $stmt = $this->db->prepare("UPDATE carrello SET quantità= quantità + ?
                                    WHERE IDutenteC = ?
                                    AND IDeventoC = ?
                                    AND giornataC = ?");
        $stmt->bind_param('iiis', $quantità, $IDutente, $IDevento, $giornata);
        $stmt->execute();

    }



    public function checkAlreadyExistingBoughtEvent($IDutente, $IDevento, $giornata){
        $stmt = $this->db->prepare("SELECT *
                                    FROM carrello
                                    WHERE IDutenteC = ?
                                    AND acquistato = 1
                                    AND IDeventoC = ?
                                    AND giornataC = ?");
        $stmt->bind_param('iis', $IDutente, $IDevento, $giornata);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function deleteBoughtTicket($IDutente, $IDevento, $giornata){
        $stmt = $this->db->prepare("DELETE 
                                    FROM carrello
                                    WHERE IDutenteC = ?
                                    AND IDeventoC = ?
                                    AND giornataC = ?
                                    AND acquistato = 0");
        $stmt->bind_param('iis', $IDutente, $IDevento, $giornata);
        $stmt->execute();
    }

    public function searchArtists($messaggio){
        $stmt = $this->db->prepare("SELECT *
                                    FROM artista
                                    WHERE nomeA LIKE ?");
        $stmt->bind_param('s', $messaggio);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function searchEvents($messaggio){
        $stmt = $this->db->prepare("SELECT *
                                    FROM evento, artista, giorno
                                    WHERE nomeE LIKE ?
                                    AND IDartistaE = IDartista
                                    AND IDevento = IDeventoE");
        $stmt->bind_param('s', $messaggio);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function searchCity($messaggio){
        $stmt = $this->db->prepare("SELECT *
                                    FROM artista, evento, giorno
                                    WHERE città LIKE ?
                                    AND IDevento = IDeventoE
                                    AND IDartistaE = IDartista");
        $stmt->bind_param('s', $messaggio);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateFreeChair($posti, $IDevento, $giornata) {
            $stmt = $this->db->prepare("UPDATE giorno SET postiL = postiL - ?
                                        WHERE IDevento = ?
                                        AND giornata = ?");
            $stmt->bind_param('iis', $posti, $IDevento, $giornata);
            $stmt->execute();
    }

    public function getOrganizers(){
        $stmt = $this->db->prepare("SELECT *
                                    FROM utente
                                    WHERE tipoaccount='organizzatore'
                                    AND confermato=0");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addOrganizer($organizzatore){
        $stmt = $this->db->prepare("UPDATE utente SET confermato=1
                                    WHERE IDutente=?");
        $stmt->bind_param('i', $organizzatore);
        $stmt->execute();
    }
     
    public function getIDutente($nickname){
        $stmt = $this->db->prepare("SELECT IDutente
                                    FROM utente
                                    WHERE nickname=?");
        $stmt->bind_param('s', $nickname);                
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function isAnOrganizer($IDutente){
        $stmt = $this->db->prepare("SELECT *
                                    FROM utente
                                    WHERE tipoaccount='organizzatore'
                                    AND IDutente=?");
        $stmt->bind_param('i', $IDutente);                  
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
   

    public function isAConfirmedOrganizer($IDorganizzatore){
        $stmt = $this->db->prepare("SELECT confermato
                                    FROM utente
                                    WHERE IDutente=?");
        $stmt->bind_param('i', $IDorganizzatore);                
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEventsInMarket(){
        $stmt = $this->db->prepare("SELECT *
                                    FROM carrello, artista, evento, giorno
                                    WHERE vendesi=1
                                    AND IDeventoC = IDevento
                                    AND IDevento = IDeventoE
                                    AND IDartistaE = IDartista
                                    AND giornataC = giornata");               
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateMarket($IDutente, $IDevento, $giornata, $IDvenditore){
        $stmt = $this->db->prepare("UPDATE carrello SET IDutenteC=? ,acquistato=1 ,vendesi=0 ,IDvenditore=0
                                    WHERE vendesi=1
                                    AND IDeventoC = ?
                                    AND giornataC = ?
                                    AND IDvenditore = ?");
        $stmt->bind_param('iisi', $IDutente, $IDevento, $giornata, $IDvenditore);
        $stmt->execute();
    }

    public function sellEventToTheCommunityThroughCommunity($IDutente, $IDevento, $giornata){
        $stmt = $this->db->prepare("UPDATE carrello SET IDvenditore = ?, IDutenteC=-1 ,acquistato=0 ,vendesi=1
                                    WHERE vendesi=0
                                    AND IDeventoC = ?
                                    AND giornataC = ?
                                    AND IDutenteC = ?");
        $stmt->bind_param('iisi', $IDutente, $IDevento, $giornata, $IDutente);
        $stmt->execute();
    }
}
?>