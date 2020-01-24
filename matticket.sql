-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 23, 2020 alle 22:58
-- Versione del server: 10.4.8-MariaDB
-- Versione PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matticket`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `artista`
--

CREATE TABLE `artista` (
  `nomeA` varchar(100) NOT NULL,
  `IDartista` int(11) NOT NULL,
  `descrizioneA` varchar(10000) DEFAULT 'Nessuna Descrizione',
  `immagineA` varchar(1000) NOT NULL,
  `sito` varchar(10000) DEFAULT 'Nessun sito disponibile'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `artista`
--

INSERT INTO `artista` (`nomeA`, `IDartista`, `descrizioneA`, `immagineA`, `sito`) VALUES
('Andrea Pucci', 30, '\r\nAndrea Pucci, o soltanto Pucci, pseudonimo di Andrea Baccan (Milano, 23 agosto 1965), è un comico, cabarettista, attore e conduttore televisivo italiano. Nato a Milano da genitori di origine veneta, il padre originario di Stanghella (PD)[1] e la madre di Pressana (VR). In origine Baccan lavorava presso la tabaccheria di famiglia, poi intraprese la professione di gioielliere. In seguito partecipò come concorrente barzellettiere nella trasmissione La sai l\'ultima? (stagione 1993-94). Da lì è partita la sua gavetta; Baccan si esibisce con monologhi e satira su sfondo di costume (non ama quella a sfondo politico) e società moderna, coinvolgendo il pubblico, in quanto i suoi monologhi si basano sull\'interpretazione in chiave comica di verità attuali, quindi che potrebbero anche essere vissute dal pubblico nella quotidianità.', 'AndreaPucci', 'http://www.andreapucci.it/'),
('Angelo Pintus', 31, 'Angelo Pintus (Trieste, 21 maggio 1975) è un comico, imitatore, cabarettista e showman italiano. Angelo Pintus nasce a Trieste da padre di origine sarda e madre di origini franco-liguri. La sua infanzia e la sua adolescenza sono divise tra Sardegna, Francia e Trieste, il che gli permette di sviluppare una particolare verve comica sin dai banchi di scuola.\r\n\r\nParte giovanissimo per diventare un animatore Valtur.\r\n\r\nNel 2000, forma il duo Angelo & Max con il comico Max Vitale. Nel 2001 i due sono spesso ospiti al Maurizio Costanzo Show e appaiono in altre trasmissioni televisive.\r\n\r\nLa coppia vince nel 2007 il concorso Stasera mi butto e alla separazione del duo segue la partecipazione di Angelo a diverse trasmissioni Mediaset, come Guida al campionato.\r\n\r\nDal 2009 al 2015 fa parte del cast di Colorado, in cui propone inizialmente la rubrica Sfighe (parodia del programma di approfondimento sportivo Sfide), iniziando a farsi conoscere grazie alle imitazioni di personaggi sportivi. La rubrica evolve poi in Sfighe nella Storia e Sfighe nel doposcuola. Dal 2011 propone la rubrica Non sopporto più, allargando le imitazioni ad altri personaggi del mondo dello spettacolo. La sua ultima presenza nel programma, come ospite speciale in una sola puntata, risale al 2016 con un monologo sul cyberbullismo.', 'AngeloPintus', 'http://www.angelopintus.com/'),
('Coldplay', 7, 'La band è composta da Chris Martin (voce, pianoforte, chitarra acustica), Jonny Buckland (chitarra elettrica), Guy Berryman (basso) e Will Champion (batteria). I quattro musicisti si conobbero all\'università college di Londra e fondarono il gruppo che cambiò diversi nomi tra il 1996-1998, prima in Pectoralz, poi Starfish ed in seguito definitivamente Coldplay;[5] Il direttore creativo Phil Harvey è conosciuto per essere il quinto membro della formazione.[5]\r\n\r\nI Coldplay raggiunsero la fama mondiale con il loro singolo Yellow, contenuto nel loro album di debutto Parachutes (2000). Il brano diventò presto una hit e nel luglio 2000 arrivò a piazzarsi alla quarta posizione della classifica dei singoli britannica.[6] Il loro secondo album A Rush of Blood to the Head (2002), vinse un NME Awards come album dell\'anno e segna, dunque, la loro consacrazione e consente alla band di acquisire notorietà in tutto il mondo. L\'album si piazzò direttamente al 1º posto della Official Albums Chart[6] e al 5º posto della Billboard 200.[7] La loro successiva pubblicazione, X&Y (2005) ricevette critiche positive ma anche critiche inferiori all\'album precedente ma riuscì comunque a tenere i ritmi di vendita dei precedenti album risultando il più venduto del 2005. Con il loro quarto album in studio Viva la vida or Death and All His Friends (2008), prodotto da Brian Eno, il gruppo ottenne numerose recensioni favorevoli con una vendita di oltre 10 milioni di copie,[8] oltre alla vittoria di tre Grammy Award.[9] Mylo Xyloto, il quinto album, esce ad ottobre del 2011 ed entra nelle top ten di oltre 30 paesi vendendo più di 8 milioni di copie[10] e diventando l\'album più venduto del Regno Unito.[11] Nel 2014 esce il sesto album Ghost Stories, che raggiunge la prima posizione dell\'iTunes Store in oltre 100 paesi,[12] con una vendita pari a 3,7 milioni di copie.[13] Nel 2015 è stata la volta del settimo album in studio A Head Full of Dreams, che ha venduto 5 milioni di copie in tutto il mondo.[14] A livello mondiale i Coldplay hanno venduto oltre 100 milioni di album, facendo di loro tra gli artisti mondiali ad averne venduto di più.[15] Durante la loro carriera i Coldplay hanno vinto 107 premi tra cui 9 BRIT Award (record), 7 Grammy Award, 7 MTV Europe Music Awards e 6 MTV Video Music Awards. Con il loro A Head Full of Dreams Tour, i Coldplay si sono confermati tra gli artisti più importanti della storia della musica, infatti il loro tour risulta essere il terzo più grande di tutti i tempi, raccogliendo oltre 5.5 milioni di fan in tutto il mondo.', 'Coldplay', 'https://www.coldplay.com/'),
('Disney', 26, 'The Walt Disney Company, comunemente conosciuta come Disney, è una multinazionale statunitense, con sede principale a Burbank in California. È stata fondata nel 1923 da Walt Disney e suo fratello Roy, con il nome di Disney Brothers Studios, rinominata successivamente Walt Disney Productions nel 1929, e infine nel 1986 viene chiamata col nome odierno.\r\n\r\nL\'azienda era in origine uno studio di animazione che ottenne un significativo successo con una serie animata lanciata nel 1928, Mickey Mouse. In contemporanea all\'affermazione dei propri cortometraggi di animazione, iniziò a produrre lungometraggi animati. Per differenziare il business e crescere ulteriormente entrò nel settore del turismo, con parchi a tema, tra cui Disneyland e Walt Disney World Resort, dell\'intrattenimento e del merchandising.', 'Disney', 'https://disney.it'),
('Edvard Munch', 6, 'Edvard Munch nacque a Løten, in Norvegia, secondo di cinque figli: Johanne Sophie (1862-1877), la sorella maggiore con la quale instaurerà un rapporto di grandissimo affetto, Peter Andreas (1865-1895), Laura Catherine (1867-1926) e Inger Marie (1868-1952). Suoi parenti erano anche il pittore Jacob Munch e lo storico Peter Andreas Munch, fratello del padre.\r\n\r\nLa famiglia si trasferì a Christiania (l\'odierna Oslo) nel 1864, quando Christian Munch venne impiegato come medico presso la fortezza di Akershus. Sin dalla fanciullezza, Edvard fu provato da una serie interminabile di disgrazie familiari: la madre morì di tubercolosi nel 1868, seguita da Johanne Sophie nel 1877, che spirò stroncata dalla stessa malattia.[1] A curarsi del giovane Munch, dopo la morte della madre, vi erano il padre e la zia Karen; fu in questo periodo che il ragazzo iniziò ad interessarsi all\'arte, disegnando per tenersi occupato nei momenti di stasi. Nel frattempo Christian Munch, per sopperire alle varie assenze fatte dal figlio a scuola per motivi di salute, avviò la sua formazione in ambito storico-letterario, introducendolo anche alla dimensione horror-psicologica dello scrittore statunitense Edgar Allan Poe.', 'EdvardMunch', 'https://www.edvardmunch.org/'),
('Eminem', 15, 'Eminem, pseudonimo di Marshall Bruce Mathers III (St. Joseph, 17 ottobre 1972), è un rapper, produttore discografico e attore statunitense.\r\n\r\nÈ considerato uno dei migliori artisti hip hop di sempre, oltre che di tutta la musica hip hop degli anni 2000.[5] Cresciuto a Detroit, è stato scoperto nel 1997 dal rapper e produttore discografico Dr. Dre[6] e ha ottenuto il primo successo due anni più tardi con il singolo My Name Is.[6] Con il terzo album The Marshall Mathers LP, Eminem ha stabilito il record di album hip hop dalle vendite più veloci di sempre[7] e terzo album dalle vendite più veloci di sempre,[7] con 1.760.049 copie solo negli Stati Uniti nella prima settimana,[8] mentre il successivo The Eminem Show è stato il più venduto e premiato di tutto il 2002,[9] con 7,9 milioni di copie vendute solo negli Stati Uniti in quell\'anno.', 'Eminem', 'https://www.eminem.com/'),
('Eros Ramazzotti', 16, 'Eros Ramazzotti, all\'anagrafe Eros Luciano Walter Ramazzotti (Roma, 28 ottobre 1963), è un cantautore italiano.\r\n\r\nÈ uno dei cantanti di maggiore successo nel panorama della musica leggera italiana, del pop rock[1], e del pop latino a livello internazionale dagli anni ottanta.[2] Dal 1984 ha venduto circa 60 milioni di dischi ed è tra gli artisti italiani che hanno venduto il maggior numero di dischi.[3] Ramazzotti vanta anche importanti collaborazioni artistiche con cantanti di levatura internazionale come Tina Turner, Cher, Anastacia, Ricky Martin, Luis Fonsi, Joe Cocker, Andrea Bocelli e Luciano Pavarotti vincendo, inoltre, numerosi premi e riconoscimenti (come l\'Echo Music Award 1999 e il NIAF Award 2008) ottenuti per aver promosso l\'immagine della musica italiana all\'estero.', 'ErosRamazzotti', 'https://www.ramazzotti.com/'),
('Il Volo', 33, 'Il Volo è un gruppo musicale italiano composto da due tenori e un baritono:[1] Piero Barone (Naro, 24 giugno 1993), Ignazio Boschetto (Bologna, 4 ottobre 1994) e Gianluca Ginoble (Roseto degli Abruzzi, 11 febbraio 1995).[2]\r\n\r\nSono stati i primi artisti italiani ad aver firmato un contratto diretto con una major statunitense, la Geffen.[3] Interpretano brani perlopiù appartenenti alla tradizione classica italiana e internazionale, con stile e arrangiamenti moderni, e brani pop in chiave classica. Hanno inciso anche brani in lingua spagnola, inglese, francese, tedesca e latina.\r\n\r\nIl gruppo ha vinto il Festival di Sanremo 2015 con il brano Grande amore; con lo stesso pezzo ha rappresentato l\'Italia all\'Eurovision Song Contest 2015, classificandosi terzo.', 'IlVolo', 'https://www.ilvolomusic.com/'),
('Nazionale Italiana Cantanti', 9, 'La Nazionale italiana cantanti è una squadra di calcio formata da cantanti italofoni fondata nel 1981 da Mogol, Gianni Morandi, Andrea Mingardi, Riccardo Fogli, Umberto Tozzi, Pupo, Paolo Mengoli, Pino D\'Angiò, Gianni Bella, Sandro Giacobbe e Oscar Prudente[1]. Promotore dell\'iniziativa fu Mogol, che si era basato su precedenti esperienze di azioni e incontri sportivi finalizzati alla solidarietà.\r\n\r\nIn realtà vi erano già state in precedenza alcune partite della Nazionale Cantanti: la prima avvenne nel 1969, e tra i giocatori vi era Paolo Mengoli, che sarà una presenza costante anche negli anni successivi. Un\'altra partita venne giocata contro la Nazionale Attori il 2 ottobre 1975 (tra i cantanti vi era anche Lucio Battisti), ma si era trattato di un caso isolato che non ebbe seguito negli anni successivi[2].\r\n\r\nIl funzionamento della nazionale cantanti è in tutto e per tutto simile a quello dei club calcistici, sebbene tutto sia interamente finalizzato al finanziamento di progetti di aiuto.', 'NazionaleItalianaCantanti', 'https://www.nazionalecantanti.it/'),
('Pablo Picasso', 4, 'Pablo Ruiz y Picasso, semplicemente noto come Pablo Picasso (Malaga, 25 ottobre 1881 – Mougins, 8 aprile 1973), è stato un pittore e scultore spagnolo di fama mondiale, considerato uno dei protagonisti assoluti della pittura del XX secolo.\r\n\r\nSnodo cruciale tra la tradizione ottocentesca e l\'arte contemporanea, Picasso è stato un artista innovatore e poliedrico, che ha lasciato un segno indelebile nella storia dell\'arte mondiale per esser stato il fondatore, insieme a Georges Braque, del cubismo. Dopo aver trascorso una gioventù burrascosa, ben espressa nei quadri dei cosiddetti periodi blu e rosa, a partire dagli anni venti del Novecento conobbe una rapidissima fama: tra le sue opere universalmente conosciute Les demoiselles d\'Avignon (1907) e Guernica (1937).', 'PabloPicasso', 'https://www.pablopicasso.org/'),
('Paul Cezanne', 21, 'Paul Cézanne nacque a Aix-en-Provence, cittadina nel meridione della Provenza, in Francia, il 19 gennaio 1839 in seno a una famiglia dalle origini fieramente italiane. Secondo la più nota teoria i Cézanne, infatti, erano nativi di Cesana Torinese, un piccolo borgo alle falde del Monginevro, in Piemonte: già a partire dal XVI secolo, tuttavia, gli antenati di Paul si erano insediati ad Aix.\r\n\r\nSecondo una più recente scoperta ben documentata storicamente le vere origini del pittore Cézanne sarebbero a Cesena in Romagna. In un libro di memorie scoperto a Milano nel 1995 dallo studioso Romano Pieri c\'è una autocertificazione che recita testualmente: \"Il padre di Paul Cézanne era originario di Cesena, in Romagna.\" Nell\'archivio del museo Cézanne venne trovata una vecchia richiesta del gallerista Vollard che chiedeva precisi dati biografici della famiglia da riportare sul dépliant della grande mostra di Cézanne a Parigi.', 'PaulCezanne', 'https://www.paul-cezanne.org/'),
('Rafael Nadal', 10, 'Rafael Nadal Parera, detto Rafa (Manacor, 3 giugno 1986), è un tennista spagnolo, numero 1 della classifica ATP[1].\r\n\r\nIn virtù dei record e dei titoli conseguiti, dello stile di gioco potente, completo ed efficace su tutte le superfici, è riconosciuto come uno dei migliori tennisti di tutti i tempi, nonché uno dei più grandi atleti nella storia dello sport.[3][4][5][6][7][8][9] Le sue numerose vittorie sulla terra rossa (record di 59 titoli) gli sono valse il soprannome di King of Clay (\"Re della terra battuta\"), superficie sulla quale è considerato il più grande giocatore della storia del tennis.', 'RafaelNadal', 'https://rafaelnadal.com/'),
('Roger Federer', 14, 'Roger Federer (Basilea, 8 agosto 1981) è un tennista svizzero, numero 3 del ranking mondiale ATP[2].\r\n\r\n\r\nFirma di Roger Federer\r\nSoprannominato King Roger o The Swiss Maestro,[3][4] in virtù dei primati e dei titoli conseguiti, dello stile di gioco efficace su ogni superficie,[5][6][7] dell\'accuratezza tecnica dei suoi colpi,[8][9][10][11][12][13][14] dell\'eccellente rendimento nell\'arco di una carriera longeva, è considerato uno dei migliori tennisti di tutti i tempi,[15][16][17][18][19][20][21] nonché uno dei più grandi sportivi di sempre.[22][23][24]\r\n\r\nÈ il giocatore che è stato più a lungo il numero 1 del mondo, sia come totale di settimane in vetta al ranking (310), sia per il totale di settimane consecutive, sia per l\'età raggiunta detenendo il primato.[25] È il giocatore che ha vinto più titoli nei tornei del Grande Slam (20) e che ha partecipato al maggior numero di finali (31). Nel 2009 con la vittoria nel Roland Garros ha completato il Career Grand Slam. Nel 2017 battendo in finale Marin Čilić è diventato l‘unico giocatore ad aver vinto otto volte Wimbledon, il più antico e prestigioso torneo al mondo.[26][27][28][29][30] Il 28 gennaio 2018, vincendo il suo ventesimo Slam, segna una delle imprese più significative nella storia dello sport.', 'RogerFederer', 'https://www.rogerfederer.com/'),
('Salvador Dalì', 20, 'Salvador Dalí, all\'anagrafe Salvador Domènec Felip Jacint Dalí i Domènech, 1º marchese di Dalí de Púbol (Figueres, 11 maggio 1904 – Figueres, 23 gennaio 1989), è stato un pittore, scultore, scrittore, fotografo, cineasta, designer e sceneggiatore spagnolo.\r\n\r\n\r\nBlasone dei Marchesi di Púbol, concesso a Dalí da re Juan Carlos I di Spagna.\r\nDalí fu un pittore abile e virtuosissimo disegnatore[1], ma celebre anche per le immagini suggestive e bizzarre delle sue opere surrealiste. Il suo peculiare tocco pittorico fu attribuito all\'influenza che ebbero su di lui i maestri del Rinascimento[2][3]. Realizzò La persistenza della memoria, una delle sue opere più famose, nel 1931. Il talento artistico di Dalí trovò espressione in svariati ambiti, tra cui il cinema, la scultura e la fotografia, portandolo a collaborare con artisti di ogni settore.\r\n\r\nFaceva risalire il suo \"amore per tutto ciò che è dorato ed eccessivo, la mia passione per il lusso e la mia predilezione per gli abiti orientali\"[4] a una auto-attribuita \"discendenza araba\", sostenendo che i suoi antenati discendessero dai Mori.', 'SalvadorDalì', 'http://www.salvadordali.com/'),
('Sebastiao Salgado', 24, 'Sebastião Ribeiro Salgado Júnior (Aimorés, 8 febbraio 1944) è un fotografo brasiliano che, attualmente, vive a Parigi. Fotoreporter umanista, è considerato uno tra i più grandi fotografi dei nostri tempi e per il World Press Photo è stato «più volte candidato al premio di fotografo dell\'anno». Dopo una formazione universitaria di economista e statistico decide, in seguito ad una missione in Africa, di diventare fotografo. Nel 1973 realizza un reportage sulla siccità del Sahel, seguito da uno sulle condizioni di vita dei lavoratori immigrati in Europa. Nel 1974 entra nell\'agenzia Sygma e documenta la rivoluzione in Portogallo e la guerra coloniale in Angola e in Mozambico. Nel 1975 entra a far parte dell\'agenzia Gamma ed in seguito, nel 1979, della celebre cooperativa di fotografi Magnum Photos.', 'SebastiaoSalgado', 'https://www.mostrasalgado.it/'),
('Stephen Daldry', 27, 'Stephen David Daldry (Dorset, 2 maggio 1961) è un regista cinematografico britannico. È stato candidato all\'Oscar come miglior regista per i primi tre lungometraggi da lui girati: Billy Elliot (2000), The Hours (2002) e The Reader - A voce alta (The Reader). Ha inoltre vinto un Tony Award nel 2009 per la regia del musical Billy Elliot the Musical.', 'StephenDaldry', 'Nessun sito disponibile'),
('Steve McQuerry', 3, 'Steve McCurry (Filadelfia, 23 aprile 1950) è un fotografo statunitense, uno dei fotografi della Magnum Photos, che ha spaziato con i suoi reportage in più generi, dalla street photography[1] alla fotografia di guerra[2] e dalla fotografia urbana[3] al ritratto come la celebre fotografia Ragazza afgana. Ha frequentato la High School Marple Newtown nella Contea di Delaware e si è poi iscritto presso la Penn State University per studiare fotografia e cinema, ma poi ottenne una laurea in teatro nel 1974. Si interessò molto alla fotografia quando iniziò a fotografare per il quotidiano della Penn State: The Daily Collegian.[5]\r\n\r\nDopo aver lavorato al Today\'s Post presso il King of Prussia per due anni, partì per l\'India come fotografo freelance. È stato proprio in India che McCurry ha imparato a guardare ed aspettare la vita. \"Se sai aspettare\", disse, \"le persone si dimenticano della tua macchina fotografica e la loro anima esce allo scoperto\".', 'SteveMcQuerry', 'https://www.stevemccurry.com/'),
('Tiziano Ferro', 2, 'Tiziano Ferro (Latina, 21 febbraio 1980[5]) è un cantautore e produttore discografico italiano.\r\n\r\nNel corso della sua carriera ha cantato anche in spagnolo, inglese, francese e portoghese. Ha venduto oltre 15 milioni di copie nel mondo,[6] prevalentemente in Europa e in America Latina,[2][7] e nella sua carriera ventennale ha ottenuto numerosi premi, candidature e riconoscimenti tra i più importanti a livello nazionale e internazionale.', 'TizianoFerro', 'https://www.tizianoferro.com/'),
('Travis Scott', 8, 'Travis Scott (stilizzato Travi$ Scott), pseudonimo di Jacques Berman Webster II,[2] detto anche La Flame (Houston, 30 aprile 1992), è un rapper e produttore discografico statunitense. Scott ha firmato nel novembre del 2012 con la GOOD Music, conosciuta anche come Very G.O.O.D. Beats, partecipando in seguito alla realizzazione dell\'album Cruel Summer. Nell\'aprile 2013 venne annunciata la firma di Scott per l\'etichetta Grand Hustle del rapper T.I.. Ha pubblicato il suo primo progetto ufficiale, un mixtape intitolato Owl Pharaoh, il 21 maggio 2013. Il 1º febbraio 2018 nasce la sua prima figlia, Stormi, avuta dalla relazione con Kylie Jenner.', 'TravisScott', 'https://www.travisscott.com/'),
('UEFA Champions League', 12, 'La UEFA Champions League o Coppa dei Campioni d\'Europa, meglio nota come Champions League o semplicemente Champions, è il più prestigioso torneo internazionale calcistico in Europa per squadre di club maschili.\r\n\r\nLa denominazione di Champions League («Lega dei Campioni») sostituì nel 1992 quella storica di Coppa dei Campioni d\'Europa propriamente detta e istituita nel 1955, cui fino al 1997 parteciparono le squadre vincitrici dei rispettivi campionati nazionali di massima divisione. Inizialmente tale coppa prevedeva esclusivamente doppi turni a eliminazione diretta e la sola partecipazione delle squadre vincitrici della massima divisione del proprio Paese. Dagli anni novanta i requisiti per la partecipazione al torneo furono rivisitati ed estesi inizialmente ad alcune squadre classificatesi seconde nel proprio campionato nazionale e successivamente anche alle terze e quarte classificate delle prime nazioni della classifica UEFA (attualmente terze e quarte delle prime quattro nazioni, terze delle prime sei nazioni). Inoltre dal 1991 sono state introdotte una o più fasi a gironi nella parte iniziale.', 'UEFAChampionsLeague', 'https://it.uefa.com/uefachampionsleague/'),
('UEFA Europa League', 13, 'La UEFA Europa League è una competizione sportiva organizzata dall\'Unione delle Federazioni Calcistiche Europee (UEFA), la seconda per prestigio dopo la Champions League. Fino al 2009 si chiamava Coppa UEFA, istituita nel 1971 dalla confederazione calcistica europea. Questo torneo, a sua volta, aveva preso il posto della Coppa delle Fiere, inizialmente disputata su invito e non per diritto acquisito da rappresentative di grandi città dell\'Europa che ospitavano fiere commerciali. L\'UEFA ha definito la Coppa delle Fiere come antenata della successiva Coppa UEFA/Europa League; tuttavia, non essendone stata l\'organizzatrice, non è mai stata riconosciuta come manifestazione ufficiale dalla confederazione continentale. Per tale motivo la Coppa delle Fiere non viene inclusa neppure nelle statistiche riguardanti l\'Europa League.', 'UEFAEuropaLeague', 'https://it.uefa.com/uefaeuropaleague/'),
('Vasco Rossi', 1, 'Vasco Rossi, noto anche come Vasco o con l\'appellativo Blasco[3] (Zocca, 7 febbraio 1952), è un cantautore italiano.\r\n\r\nAutodefinitosi provoca(u)tore,[4] è considerato la più grande rockstar italiana di tutti i tempi.[5][6] Ha pubblicato 33 album dall\'inizio della sua carriera (dal 1977), di cui 17 album in studio, 11 album dal vivo e 5 raccolte ufficiali, 2 EP, 1 opera audiovisiva e ha pubblicato complessivamente ben 180 canzoni oltre a numerosi testi e musiche per altri interpreti. Ha venduto quasi 40 milioni di dischi dal 1977 al 2019 ed è da più di trent\'anni uno degli artisti italiani di maggior successo.[7]\r\n\r\nNegli anni ottanta, per via dello stile di vita sregolato caratterizzato da alcol, droghe, donne e continui tour frenetici, finì per impersonare per la prima volta in Italia, lo stereotipo della rockstar.', 'VascoRossi', 'https://www.vascorossi.net/it/home/1-0.html'),
('Vassily Kandinsky', 5, 'Nato il 16 dicembre 1866 (4 dicembre O.S.) a Mosca, figlio di Lidija Tičeeva (1840-1910) e Vasilij Silvestrovič Kandinskij (1832-1926), ricco commerciante di tè. Nel 1870 la famiglia si trasferì a Monaco di Baviera. L\'anno successivo i suoi genitori divorziano e il piccolo Vasilij si trasferisce ad Odessa, a casa della zia Elizaveta Tičeeva dove riceve le prime nozioni di disegno, dopo che da bambino, durante un viaggio a Venezia con i genitori, si innamorò delle luci notturne della città. Con lei imparò anche a suonare il violoncello, con il quale suonò nell\'orchestra della scuola e proseguì con un maestro di disegno le lezioni di pittura. Dal 1886 al 1889 studia legge a Mosca. Nel 1892 si laurea, e nello stesso anno decide di sposare la cugina Anja Čimiakin, che aveva conosciuto all\'Università di Mosca e con la quale aveva stabilito un rapporto di grande intesa e affinità intellettuale. Nel 1896 rifiuta un posto di docente all\'Università di Dorpat in Estonia, per studiare arte presso l\'Akademie der Bildenden Künste di Monaco di Baviera dove è allievo di Franz von Stuck. Si stabilisce nel quartiere di Schwabing, in seno a una grande comunità di artisti, rivoluzionari russi, musicisti, scrittori e persone creative in generale.', 'VassilyKandinsky', 'https://www.wassilykandinsky.net/');

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `IDutenteC` int(11) NOT NULL,
  `IDeventoC` int(11) NOT NULL,
  `giornataC` date NOT NULL,
  `quantità` int(100) NOT NULL,
  `acquistato` int(100) NOT NULL,
  `vendesi` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`IDutenteC`, `IDeventoC`, `giornataC`, `quantità`, `acquistato`, `vendesi`) VALUES
(1, 26, '2020-12-08', 2, 0, 0),
(1, 26, '2020-12-08', 5, 1, 0),
(1, 30, '2020-04-30', 6, 1, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE TABLE `evento` (
  `IDeventoE` int(100) NOT NULL,
  `IDartistaE` int(11) NOT NULL,
  `nomeE` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `genere` varchar(100) NOT NULL,
  `immagineE` varchar(100) NOT NULL,
  `IDorganizzatore` int(100) NOT NULL,
  `descrizioneE` varchar(10000) NOT NULL DEFAULT 'Nessuna descrizione',
  `prezzo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`IDeventoE`, `IDartistaE`, `nomeE`, `categoria`, `genere`, `immagineE`, `IDorganizzatore`, `descrizioneE`, `prezzo`) VALUES
(1, 1, 'Vasco Rossi Live', 'musica', 'italiane', 'VascoRossiLive.png', 0, 'Vasco Rossi non si ferma più. Dopo aver vissuto un tour da grande protagonista nel 2018 e aver replicato con una storica residency e San Siro e una doppietta eccezionale a Cagliari nel 2019, il rocker di Zocca ha ufficializzato che il VascoNonStop Live proseguirà anche nel 2020. Un annuncio che torna a incendiare la Vascomania: il prossimo anno l’artista ha infatti affermato di voler essere protagonista all’interno di diversi festival rock.', 55),
(2, 2, 'Ferro Tour', 'musica', 'italiane', 'FerroTour.png', 0, 'Cresce l’attesa per il “TZN2020”, il tour negli stadi di Tiziano Ferro in programma per l’estate 2020. Dopo l’annuncio del calendario delle tredici date, il cantautore di Latina ha pubblicato l’album “Accetto Miracoli”, anticipato dai singoli “Buona (Cattiva) Sorte” e “Accetto Miracoli”. Come terzo estratto è stato scelto “In mezzo a questo inverno”, anche questo tra i brani più ascoltati del momento. Se negli album precedenti la produzione era sempre stata affidata a Michele Canova, per questo ottavo disco il progetto passerà nelle mani di uno dei nomi più importanti del panorama musicale globale: Timbaland.', 45),
(3, 3, 'Mostra McQuerry ', 'mostre', 'fotografia', 'MostraMcQuerry.png', 0, 'Ritorna Steve McCurry, per inaugurare una fase nuova. Con la mostra ‘Cibo’ il 21 settembre si alza il sipario sulla prossima Settimana del Buon Vivere, che da quest’anno si trasforma in festival. Fu il grande fotoreporter americano nel 2015, a far capire che sì, aveva senso per Forlì lanciarsi anche nel mondo della fotografia, all’epoca un salto nel buio. Poi 76mila visitatori, quasi un record, ed era nato un filone nuovo per i Musei San Domenico. Che saranno lo scenario anche di ‘Cibo’, la mostra dal 21 settembre al 6 gennaio.', 20),
(4, 4, 'Le opere di Picasso', 'mostre', 'pittura', 'LeopereDiPicasso.png', 0, '50 pezzi unici provenienti dalle collezioni del Musée National Picasso-Paris saranno in mostra al MIC di Faenza, dal 1 novembre 2019 al 12 aprile 2020, in una grande mostra dal titolo “Picasso, La sfida della ceramica” a cura di Harald Theil e Salvador Haro con la collaborazione di Claudia Casali. Un nucleo di inestimabile valore e un prestito eccezionale che affronta tutto il percorso e il pensiero creativo dell’artista spagnolo nei confronti dell’argilla', 25),
(5, 5, 'Kandinsky - Maestro', 'mostre', 'pittura', 'Kandinsky-Maestro.png', 0, 'In occasione dei vent’anni delle Gallerie d’Italia - Palazzo Leoni Montanari di Vicenza apre al pubblico dal 5 ottobre 2019 al 26 gennaio 2020 la mostra Kandinsky, Goncharova, Chagall. Sacro e bellezza nell’arte russa, un importante progetto espositivo che presenta un nucleo di diciannove preziose icone russe appartenenti alle collezioni d’arte di Intesa Sanpaolo accostato a quarantacinque capolavori di artisti russi di fine Ottocento e inizio Novecento provenienti dalla Galleria Tret’jakov di Mosca e da altri importanti musei della Russia, di Nizza e di Salonicco.', 25),
(6, 6, 'L\'Urlo Prima di Munch', 'mostre', 'pittura', 'L\'UrloPrimaDiMunch.png', 0, 'La litografia è una forma d’arte in cui Edvard Munch (Löten, 1863-Ekely, 1944) ha eccelso per tutta la vita per la sua capacità di esaminare e descrivere con crudezza e pochi segni essenziali le emozioni umane. Ora una grande esposizione al British Museum di Londra celebra questa sua produzione artistica, rivelandosi come la più grande mostra di stampe dell’artista norvegese nel Regno Unito da 45 anni, con circa 50 opere provenienti dalla collezione del Munch Museum di Oslo: uno dei suoi più ingenti prestiti a livello internazionale. A queste si aggiunge parte della collezione del British, insieme ad altri prestiti dall’Europa, per un totale di 83 opere che dimostrano la capacità dell’artista nell’esprimere i sentimenti e le esperienze della condizione umana: dall’amore e dal desiderio alla gelosia, solitudine, ansia e dolore, anticipando tutti i temi dell’espressionismo che avrà come centro d’irradiazione la Germania.', 30),
(7, 7, 'Everyday Life Tour', 'musica', 'internazionali', 'EverydayLifeTour.png', 0, 'È un’annata incredibile per i Coldplay. Non solo Chris Martin ha ottenuto di recente le scuse di Liam Gallagher (evento epocale), ma la band, con l’\"A Head Full of Dreams Tour\", ha incassato ben 412 milioni di dollari. Questi numeri ne fanno il quinto tour per incassi della storia della musica. Chris Martin e soci hanno appena strappato questa posizione nella top 5 a Madonna e al suo \"Sticky & Sweet Tour\", che si era fermato, tra il 2008 e il 2009, a \"soli\" 408 milioni di dollari.', 90),
(8, 8, 'Travis Scott', 'musica', 'internazionali', 'TravisScott.png', 0, 'Negli ultimi anni il rapper di Houston Travis Scott è salito ai vertici dell\'hip-hop affermandosi come uno dei pezzi grossi sulla scena musicale in termini di risultati musicali, performance dal vivo e come celebrità.  Dopo i primi mixtape del 2013 e del 2014 che ne hanno dimostrato l\'evidente potenziale, è stato il suo album di debutto del 2015 Rodeo a confermare il grande valore del rapper che tra le sue influenze chiave può citare personalità come Kanye West, T.I. e Kid Cudi.  Da quel momento in poi, Travis Scott ha cavalcato l\'onda e il 2018 è stato senza dubbio l\'anno più importante della sua carriera fino ad oggi. Non solo ha pubblicato Astroworld – un album in cima alle classifiche e amato dalla critica con hit come \"Sicko Mode\" e \"Stargazing\", ma ha anche consolidato il suo status di headliner con apparizioni a festival in tutto il mondo.', 75),
(9, 9, 'La Partita del Cuore', 'sport', 'manifestazioni', 'LaPartitadelCuore.png', 0, 'La Partita del Cuore, giunta alla 28/ma edizione, è stata presentata oggi nella Sala delle Colonne del Comune di Torino, alla presenza della sindaca, Chiara Appendino. Fa tappa nel capoluogo piemontese, dopo i grandi successi del 2013, del 2015 e del 2017.  Molte le sorprese che si attendono nelle due formazioni, i cui capitani sono Paolo Bellie Andrea Agnelli. La Nazionale Cantanti sarà allenata dal mitico Gianni Morandi, affiancato da Marco Masini. Il tre volte Pallone d’oro Michel Platiniguiderà i Campioni per la Ricerca e avrà come vice il capitano dell’ultima vittoria juventina in Champions, Gianluca Vialli. Fra i Campioni per la Ricerca hanno già annunciato la loro presenza i piloti della Ferrari, Sebastian Vettele Charles Leclerc. La superstar Cristiano Ronaldo darà il calcio d’ inizio.', 12),
(10, 10, 'Nadal - Murrey', 'sport', 'partite', 'Nadal-Murrey.png', 0, 'Nadal-Medvedev è stata la partita più bella dell’anno. Per due ragioni. La prima, di natura piuttosto irrazionale ma altrettanto fondata, è che l’altra candidata al titolo, non si è mai giocata. Non esiste, non risulta. Non c’è mai stata la finale di Wimbledon 2019, non ci sono mai stati quei due match point che se realizzati avrebbero consacrato Lui come più grande di tutti i tempi, non c’è stato quell’epilogo così crudele per Il più amato di tutti. La stragrande maggioranza del mondo federeriano ragiona così, o almeno finge di farlo, perché non si è ancora ripresa dal trauma. Neppure lui, se per questo. Federer è arrivato a New York ancora scarico e con poche gambe. Nonostante un tabellone da sogno non ha mai dato a chi guarda le partite per intero — gli highlights delle partite di tennis e di qualunque altro sport dovrebbero essere evitati come la peste — la sensazione di poter arrivare fino in fondo.', 30),
(12, 12, 'Real Madrid - Inter', 'sport', 'partite', 'RealMadrid-Inter.png', 0, 'Manca circa un mese all\'inizio dei tanto attesi ottavi di finale di Champions League, nei quali vedremo in campo Juventus, Napoli e Atalanta. La speranza è quella di assistere a dei match di andata positivi per tutte e tre le squadre, partite che andranno in scena a partire da martedì 18 febbraio. I bianconeri giocheranno il primo dei due scontri diretti contro il Lione in Francia, quindi sarà importante segnare almeno un gol alla squadra di Rudi Garcia. Gli uomini di Gasperini invece torneranno a San Siro per giocare i primi 90 minuti contro il Valencia, uno degli avversari migliori che potesse capitare dall\'urna a Gomez e compagni. Decisamente più complicato il compito del Napoli, visto che il 25 febbraio nel programma del calendario della Champions League giocherà contro il Barcellona al San Paolo.', 240),
(13, 13, 'Napoli - Barcellona', 'sport', 'partite', 'Napoli-Barcellona.png', 0, 'Manca circa un mese all\'inizio dei tanto attesi ottavi di finale di Champions League, nei quali vedremo in campo Juventus, Napoli e Atalanta. La speranza è quella di assistere a dei match di andata positivi per tutte e tre le squadre, partite che andranno in scena a partire da martedì 18 febbraio. I bianconeri giocheranno il primo dei due scontri diretti contro il Lione in Francia, quindi sarà importante segnare almeno un gol alla squadra di Rudi Garcia. Gli uomini di Gasperini invece torneranno a San Siro per giocare i primi 90 minuti contro il Valencia, uno degli avversari migliori che potesse capitare dall\'urna a Gomez e compagni. Decisamente più complicato il compito del Napoli, visto che il 25 febbraio nel programma del calendario della Champions League giocherà contro il Barcellona al San Paolo.', 190),
(14, 14, 'Federer - Tsonga', 'sport', 'partite', 'Federer-Tsonga.png', 0, 'Dopo 5 sconfitte consecutive e 4 anni di digiuno, Federer torna a battere Djokovic: 6-4, 6-3 al termine di una partita semplicemente sontuosa. Lo svizzero vola in semifinale delle ATP Finals 2019, mentre Djokovic viene così eliminato al girone. Un ko che al serbo costa anche la chance di tornare n°1 del mondo: a prescindere dal vincitore, l\'anno sarà chiuso in vetta da Rafael Nadal.', 40),
(15, 15, 'The Real Slim Shady', 'musica', 'internazionali', 'TheRealSlimShady.png', 0, 'Eminem torna in tour. Il rapper ha annunciato una nuova serie di concerti in supporto ai suoi ultimi due album in studio, \"Revival\" e \"Kamikaze\", usciti a distanza di pochi mesi l\'uno dall\'altro (il primo è uscito nel dicembre dello scorso anno, l\'altro è stato pubblicato a sorpresa a fine agosto).  Dopo i concerti nel Vecchio Continente della scorsa estate (che hanno visto Eminem tornare ad esibirsi anche in Italia, a distanza di diciotto anni dall\'esibizione al Festival di Sanremo - diventata ormai un vero cult), il prossimo anno il tour toccherà un altro continente, l\'Oceania.', 100),
(16, 16, 'Eros Live', 'musica', 'italiane', 'ErosLive.png', 0, 'Una piccola sosta ai box e ora Eros Ramazzotti è pronto per ripartire. Il cantautore italiano ha annunciato sui social le nuove date riprogrammate del suo tour negli Stati Uniti: «Ci siamo finalmente! Oggi sono molto felice di potervi annunciare le nuove date riprogrammate, a partire da Gennaio 2020! AMERICA, SIETE PRONTI?». Questo il messaggio pubblicato per presentare le date con cui recupererà la leg americana del suo tour. Una riprogrammazione dovuta ad un intervento alle corde vocali che lo ha tenuto fermo qualche settimana e che gli ha impedito di esibirsi a maggio e giugno quando erano in programma proprio i concerti in Canada, Stati Uniti e Sud America. ', 60),
(20, 20, 'Salvador Dalì', 'mostre', 'pittura', 'SalvadorDalì.png', 0, 'L’esposizione è suddivisa in quattro macroaree tematiche e sarà accompagnata da una narrazione che si snoderà lungo tutto il percorso museale', 28),
(21, 21, 'Paul Cezanne', 'mostre', 'pittura', 'PaulCezanne.png', 0, 'La mostra di Cezanne al Palazzo Reale di Milano è dedicata all’artista che più di ogni altro ha innescato il processo rivoluzionario che, all’inizio del secolo scorso, stimolò la nascita delle grandi avanguardie storiche, influenzando ed ispirando il Cubismo di Picasso e dando il proprio contributo spirituale anche all’essenza del movimento futurista. Cezanne è un pittore dalla straordinarietà tecnica, formale, concettuale e storica, i cui grandi capolavori sono il risultato di una vita dedicata interamente all’amore per un’arte che, studiata, negata, decostruita, rimontata, analizzata e reinventata, costituisce da sé una panoramica delle sperimentazioni su cui si proveranno tutti gli artisti che gli succederanno.', 23),
(24, 24, 'Il Genio di Salgado', 'mostre', 'fotografia', 'IlGenioDiSalgado.png', 0, 'La mostra di Salgado a Forlì: 245 scatti in giro per il mondo Eventi a Forlì „ A cura di Lélia Wanick, inseparabile collaboratrice e consorte di Salgado, la mostra si compone di una selezione di 245 scatti in bianco e nero, volti a “condividere”, secondo le parole dello stesso fotografo,“un mondo ancora intatto, che troppo spesso sfugge ai nostri occhi e alla nostra conoscenza”.  Il progetto ha impegnato l\'artista per otto anni, nel corso dei quali ha affrontato 32 viaggi nei più remoti angoli del mondo, con spostamenti in barca, in mongolfiera, o su piccoli aeroplani: dai ghiacciai dell\'Antartide fino alle vaste foreste tropicali, dalla taiga dell\'Alaska al deserto del Sahara, accompagnato dalla moglie Lélia, dal figlio Juliano o dal collega Jacques Barthélemy.   “  Potrebbe interessarti: http://www.forlitoday.it/eventi/la-mostra-di-salgado-a-forli-245-scatti-in-giro-per-il-mondo.html Seguici su Facebook: http://www.facebook.com/pages/ForliToday/153595958049491', 16),
(26, 26, 'Il Re Leone', 'teatro', 'musical', 'IlReLeone.png', 0, 'Ha debuttato a Disneyland Paris il musical «Il Re Leone e i ritmi della Terra», il nuovo allestimento dell’iconico show che da più di 20 anni registra il tutto esaurito nei teatri di Broadway e del West End di Londra. La scenografia e le coreografie innovative sono ispirate al ritmo dell’Africa. In scena ci sono 30 artisti tra cantanti, ballerini, acrobati e percussionisti. La danza acrobatica è una delle caratteristiche della corografia, assieme all’inserimento dello «chansigne», il linguaggio dei gesti per sordomuti interpretato in scena da un attore, a sua volta sordo.', 72),
(27, 27, 'Billy Elliot', 'teatro', 'musical', 'BillyElliot.png', 0, 'Con le musiche pluripremiate di ELTON JOHN in un allestimento dal respiro internazionale firmato Massimo Romeo Piparo e dalla sua PeepArrow Ent. in associazione con Il Sistina, che ha completato una trilogia di cui ha parlato tutta la stampa europea, iniziata con “The Full Monty” e proseguita con “Jesus Christ Superstar”.  Il musical porta in scena una delle storie più amate del cinema europeo: il giovane Billy ama la danza e in una Inghilterra bigotta targata Thatcher, l’Inghilterra delle miniere che chiudono, dei lavoratori in rivolta, deve tristemente fare i conti con un padre e un fratello che lo vorrebbero veder diventare un pugile. L’amore, la passione, la voglia di farcela trionfano, così come l’amicizia tra adolescenti riesce a far superare ogni discriminazione di orientamento sessuale.', 64),
(30, 30, 'Pucci Show', 'teatro', 'cabaret', 'PucciShow.png', 0, 'Il nuovo spettacolo di Andrea Pucci andrà in scena al Teatro della Luna di Assago (Milano) nella stagione 2019 – 2020. Lo spettacolo, dal titolo “Il meglio di…”, è il nuovo one-man show del comico e cabarettista milanese. Sul palco Pucci sarà accompagnato dalla Zurawski live band.     Lo show è un vero e proprio work in progress che attraversa, uscendo fuori dagli schemi teatrali, tutti i suoi scheck più famosi degli ultimi anni. Uno spettacolo divertente durante il quale il pubblico in sala sarà partecipe.', 41),
(31, 31, 'Pintus on Night', 'teatro', 'cabaret', 'PintusOnNight.png', 0, 'Angelo Pintus torna a Torino nel 2020 con il suo spettacolo dal titolo “Destinati all’Estinzione”, un monologo divertente e sarcastico sulla società di oggi, le nuove abitudini, le nuove tecnologie, i social media e la politica.', 36),
(33, 33, 'Il Volo Winter Tour', 'musica', 'italiana', 'IlVoloWinterTour.png', 0, 'Nel 2009 il primo incontro tra Piero, Gianluca e Ignazio: tre voci incredibili che quest’anno festeggiano 10 anni di grandi successi in tutto il mondo, celebrati anche dalle insegne luminose che gli sono state dedicate a Times Square, New York, in occasione dell’uscita del best of “10 Years” (Sony Music) e dei prossimi concerti in USA.  Dopo un tour che li ha portati in Giappone, in Europa e in America Latina, nel 2020 IL VOLO, oltre ai già annunciati concerti in Nord America, ha in serbo delle date speciali in Italia!', 88);

-- --------------------------------------------------------

--
-- Struttura della tabella `giorno`
--

CREATE TABLE `giorno` (
  `IDevento` int(100) NOT NULL,
  `giornata` date NOT NULL,
  `luogo` varchar(100) NOT NULL,
  `città` varchar(100) NOT NULL,
  `orario` time(6) NOT NULL,
  `postiT` int(100) NOT NULL,
  `postiL` int(100) NOT NULL,
  `mappa` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `giorno`
--

INSERT INTO `giorno` (`IDevento`, `giornata`, `luogo`, `città`, `orario`, `postiT`, `postiL`, `mappa`) VALUES
(1, '2020-02-21', 'Autodromo', 'Imola', '21:00:00.000000', 190000, 13410, '<iframe src=\"http://maps.google.com/maps?q=Stadio+San+Siro&z=10&output=embed\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(1, '2020-02-29', 'San Siro', 'Milano', '21:00:00.000000', 110000, 12800, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11190.347931821096!2d9.11522869548651!3d45.478123267253046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c193fa23f19d%3A0x9c7d30c7aeff312!2sStadio%20San%20Siro!5e0!3m2!1sit!2sit!4v1579275004792!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(2, '2020-01-12', 'Franchi', 'Firenze', '21:00:00.000000', 35000, 787, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11522.46299939021!2d11.27383839453441!3d43.780834567507924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a5469122cf6a9%3A0xa36643abdf3ba3e7!2sStadio%20Artemio%20Franchi!5e0!3m2!1sit!2sit!4v1579275839363!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(2, '2020-01-17', 'Allianz Stadium', 'Torino', '21:00:00.000000', 50000, 2366, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11263.309220882114!2d7.632531095277359!3d45.109568667209125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886c17f7814e37%3A0xe3be8084a88d8da5!2sAllianz%20Stadium!5e0!3m2!1sit!2sit!4v1579275191402!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(3, '2020-02-11', 'Museo San Domenico', 'Forlì', '10:00:00.000000', 250, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11437.197613880206!2d12.027624894778848!3d44.22149386732949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132b578542e49c4d%3A0x54ad091d57358d74!2sMusei%20San%20Domenico%20-%20Forl%C3%AC!5e0!3m2!1sit!2sit!4v1579275940025!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(3, '2020-04-15', 'Museo Comunale', 'Bologna', '10:00:00.000000', 250, 90, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22768.9095370381!2d11.331937624888306!3d44.49233716902568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fd4958f1e27ff%3A0xb4c9cd38350f06a2!2sCollezioni%20Comunali%20D&#39;Arte!5e0!3m2!1sit!2sit!4v1579275918437!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(4, '2020-01-09', 'Museo San Domenico', 'Forlì', '10:00:00.000000', 400, 16, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11437.197613880206!2d12.027624894778848!3d44.22149386732949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132b578542e49c4d%3A0x54ad091d57358d74!2sMusei%20San%20Domenico%20-%20Forl%C3%AC!5e0!3m2!1sit!2sit!4v1579275940025!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(4, '2020-03-15', 'Museo San Domenico', 'Forlì', '10:00:00.000000', 400, 310, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11437.197613880206!2d12.027624894778848!3d44.22149386732949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132b578542e49c4d%3A0x54ad091d57358d74!2sMusei%20San%20Domenico%20-%20Forl%C3%AC!5e0!3m2!1sit!2sit!4v1579275940025!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(5, '2020-01-27', 'Uffizi', 'Firenze', '10:00:00.000000', 850, 175, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11524.977608488362!2d11.24657749452722!3d43.767785267514434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a54008dc59081%3A0xcddeb7c89bf0c4cd!2sGalleria%20degli%20Uffizi!5e0!3m2!1sit!2sit!4v1579276191530!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(5, '2020-03-28', 'Uffizi', 'Firenze', '10:00:00.000000', 850, 200, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11524.977608488362!2d11.24657749452722!3d43.767785267514434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a54008dc59081%3A0xcddeb7c89bf0c4cd!2sGalleria%20degli%20Uffizi!5e0!3m2!1sit!2sit!4v1579276191530!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(6, '2020-01-31', 'Pinacoteca di Brera', 'Milano', '09:00:00.000000', 1000, 465, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11191.573022773142!2d9.179081195482997!3d45.47195416725187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786ee11587e4e1f%3A0x1b367a8e2cb13736!2sPinacoteca%20di%20Brera!5e0!3m2!1sit!2sit!4v1579276063077!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(6, '2020-02-22', 'Palazzo Ducale', 'Mantova', '11:00:00.000000', 600, 90, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11253.297867210511!2d10.790071295306065!3d45.160279067211896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781d4219074e2ad%3A0x237edbac607df7c0!2sPalazzo%20Ducale!5e0!3m2!1sit!2sit!4v1579276044396!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(7, '2020-06-18', 'San Siro', 'Milano', '21:00:00.000000', 100000, 15900, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11190.347931821096!2d9.11522869548651!3d45.478123267253046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c193fa23f19d%3A0x9c7d30c7aeff312!2sStadio%20San%20Siro!5e0!3m2!1sit!2sit!4v1579275004792!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(7, '2020-06-20', 'Olimpico', 'Roma', '21:00:00.000000', 65000, 8900, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11872.330353247296!2d12.445991693531333!3d41.93407666911056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f60bc3db30885%3A0x791c21ce91960617!2sStadio%20Olimpico!5e0!3m2!1sit!2sit!4v1579276017827!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(8, '2020-05-08', 'San Siro', 'Milano', '21:00:00.000000', 100000, 849, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11190.347931821096!2d9.11522869548651!3d45.478123267253046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c193fa23f19d%3A0x9c7d30c7aeff312!2sStadio%20San%20Siro!5e0!3m2!1sit!2sit!4v1579275004792!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(8, '2020-05-11', 'San Paolo', 'Napoli', '21:00:00.000000', 55000, 4600, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12076.005007385626!2d14.184327792947318!3d40.82793617072936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b0932e1f5b2b9%3A0xc45ee1875b70f8e2!2sStadio%20San%20Paolo!5e0!3m2!1sit!2sit!4v1579276091212!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(9, '2020-04-15', 'Barbera', 'Palermo', '20:00:00.000000', 35000, 5000, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12549.840969902352!2d13.33347559158858!3d38.152741976667116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1319e8ba2febd077%3A0xdf465c3abd4fbad6!2sStadio%20Comunale%20Renzo%20Barbera!5e0!3m2!1sit!2sit!4v1579275502003!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(9, '2020-10-24', 'Bentegodi', 'Verona', '20:00:00.000000', 31000, 3000, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11198.84489693938!2d10.959894895462135!3d45.43532226724509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781e1e0d6097f83%3A0x2da0489a1134e430!2sStadio%20Marcantonio%20Bentegodi!5e0!3m2!1sit!2sit!4v1579275526175!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(10, '2020-04-04', 'Foro Italico', 'Roma', '18:00:00.000000', 10500, 2000, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47492.77011779726!2d12.434819217630114!3d41.92944465573718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f60bec3491027%3A0x133a6966f1c4b35a!2sForo%20Italico!5e0!3m2!1sit!2sit!4v1579275623314!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(10, '2020-04-11', 'Foro Italico', 'Roma', '18:00:00.000000', 10500, 10000, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47492.77011779726!2d12.434819217630114!3d41.92944465573718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f60bec3491027%3A0x133a6966f1c4b35a!2sForo%20Italico!5e0!3m2!1sit!2sit!4v1579275623314!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(12, '2020-03-18', 'Bernabeu', 'Madrid', '21:00:00.000000', 90000, 10, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12144.082699272296!2d-3.6975932072478654!3d40.452679371390154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228e23705d39f%3A0xa8fff6d26e2b1988!2sStadio%20Santiago%20Bernabeu!5e0!3m2!1sit!2sit!4v1579275549876!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(12, '2020-04-01', 'San Siro', 'Milano', '21:00:00.000000', 82000, 1500, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11190.347931821096!2d9.11522869548651!3d45.478123267253046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c193fa23f19d%3A0x9c7d30c7aeff312!2sStadio%20San%20Siro!5e0!3m2!1sit!2sit!4v1579275004792!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(13, '2020-03-19', 'San Paolo', 'Napoli', '21:00:00.000000', 50000, 4559, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12076.005007385626!2d14.184327792947318!3d40.82793617072936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b0932e1f5b2b9%3A0xc45ee1875b70f8e2!2sStadio%20San%20Paolo!5e0!3m2!1sit!2sit!4v1579276091212!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(13, '2020-03-26', 'Camp Nou', 'Barcellona', '21:00:00.000000', 95000, 9450, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11974.745961777224!2d2.114086493237676!3d41.38089566985858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498f576297baf%3A0x44f65330fe1b04b9!2sCamp%20Nou!5e0!3m2!1sit!2sit!4v1579275580674!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(14, '2020-03-03', 'Foro Italico', 'Roma', '14:00:00.000000', 10500, 350, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47492.77011779726!2d12.434819217630114!3d41.92944465573718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f60bec3491027%3A0x133a6966f1c4b35a!2sForo%20Italico!5e0!3m2!1sit!2sit!4v1579275623314!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(14, '2020-03-13', 'Wimbledon', 'Wimbledon', '14:00:00.000000', 13000, 1300, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22765401.9222897!2d-10.738261381127451!3d45.851705053148244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760f345b43f485%3A0xcee40a1e57bb6a74!2sTorneo%20di%20Wimbledon!5e0!3m2!1sit!2sit!4v1579276249132!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(15, '2020-07-08', 'San Siro', 'Milano', '21:00:00.000000', 85000, 4320, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11190.347931821096!2d9.11522869548651!3d45.478123267253046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c193fa23f19d%3A0x9c7d30c7aeff312!2sStadio%20San%20Siro!5e0!3m2!1sit!2sit!4v1579275004792!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(15, '2020-07-10', 'San Siro', 'Milano', '21:00:00.000000', 85000, 6750, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11190.347931821096!2d9.11522869548651!3d45.478123267253046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c193fa23f19d%3A0x9c7d30c7aeff312!2sStadio%20San%20Siro!5e0!3m2!1sit!2sit!4v1579275004792!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(16, '2020-02-29', 'Colosseo', 'Roma', '21:00:00.000000', 30000, 5450, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11880.335344005534!2d12.483782443508373!3d41.89105406916429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b6532013ad%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1579275602290!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(16, '2020-03-11', 'Arena di Verona', 'Verona', '21:00:00.000000', 20000, 1320, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11198.11592886427!2d10.985624095464226!3d45.438995467245746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f5f4675b6a4fb%3A0x972d445bd29ff3f5!2sArena%20di%20Verona!5e0!3m2!1sit!2sit!4v1579275354002!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(20, '2020-05-06', 'Musei Reali', 'Torino', '10:00:00.000000', 800, 90, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11270.44508083551!2d7.677394395256887!3d45.07339616720772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d70c54b5765%3A0x6ef5c7d4f853bbd!2sMusei%20Reali%20di%20Torino!5e0!3m2!1sit!2sit!4v1579275865424!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(20, '2020-05-07', 'Musei Reali', 'Torino', '10:00:00.000000', 800, 320, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11270.44508083551!2d7.677394395256887!3d45.07339616720772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d70c54b5765%3A0x6ef5c7d4f853bbd!2sMusei%20Reali%20di%20Torino!5e0!3m2!1sit!2sit!4v1579275865424!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(21, '2020-01-22', 'Accademia', 'Venezia', '10:00:00.000000', 1000, 190, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11199.933440880126!2d12.320554195459057!3d45.42983676724415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eb1ce021dc073%3A0xcb39dadfeea7176b!2sGallerie%20dell&#39;Accademia!5e0!3m2!1sit!2sit!4v1579275113072!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(21, '2020-01-25', 'Uffizi', 'Firenze', '10:00:00.000000', 1000, 50, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11524.977608488362!2d11.24657749452722!3d43.767785267514434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a54008dc59081%3A0xcddeb7c89bf0c4cd!2sGalleria%20degli%20Uffizi!5e0!3m2!1sit!2sit!4v1579276191530!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(24, '2020-07-21', 'Uffizi', 'Firenze', '10:00:00.000000', 1000, 40, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11524.977608488362!2d11.24657749452722!3d43.767785267514434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a54008dc59081%3A0xcddeb7c89bf0c4cd!2sGalleria%20degli%20Uffizi!5e0!3m2!1sit!2sit!4v1579276191530!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(24, '2020-07-22', 'Accademia', 'Venezia', '10:00:00.000000', 850, 120, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11199.933440880126!2d12.320554195459057!3d45.42983676724415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eb1ce021dc073%3A0xcb39dadfeea7176b!2sGallerie%20dell&#39;Accademia!5e0!3m2!1sit!2sit!4v1579275113072!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(26, '2020-12-08', 'Teatro alla Scala', 'Milano', '22:00:00.000000', 2000, 15, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11192.476978098797!2d9.180817895480406!3d45.467401767250976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6ad891a5757%3A0x1bade948102e834f!2sTeatro%20alla%20Scala!5e0!3m2!1sit!2sit!4v1579276114860!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(26, '2020-12-09', 'Teatro alla Scala', 'Milano', '22:00:00.000000', 2000, 70, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11192.476978098797!2d9.180817895480406!3d45.467401767250976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6ad891a5757%3A0x1bade948102e834f!2sTeatro%20alla%20Scala!5e0!3m2!1sit!2sit!4v1579276114860!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(27, '2020-10-15', 'Teatro alla Scala', 'Milano', '22:00:00.000000', 2000, 80, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11192.476978098797!2d9.180817895480406!3d45.467401767250976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6ad891a5757%3A0x1bade948102e834f!2sTeatro%20alla%20Scala!5e0!3m2!1sit!2sit!4v1579276114860!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(27, '2020-10-16', 'Teatro alla Scala', 'Milano', '22:00:00.000000', 2000, 100, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11192.476978098797!2d9.180817895480406!3d45.467401767250976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6ad891a5757%3A0x1bade948102e834f!2sTeatro%20alla%20Scala!5e0!3m2!1sit!2sit!4v1579276114860!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(30, '2020-04-30', 'Teatro Fabbri', 'Forlì', '21:30:00.000000', 500, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11437.28645070173!2d12.030631494778605!3d44.221036567329676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132b578fbd2a166d%3A0x6a9f23869d47ebb8!2sTeatro%20Diego%20Fabbri!5e0!3m2!1sit!2sit!4v1579276168357!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(30, '2020-05-01', 'Teatro Bonci', 'Cesena', '21:00:00.000000', 400, 5, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11453.773293170936!2d12.239532294731331!3d44.13610316735791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ca4c98c6953bd%3A0x3a06a47bcae25e4d!2sTeatro%20Alessandro%20Bonci!5e0!3m2!1sit!2sit!4v1579276150928!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(31, '2020-08-05', 'Forum di Assago', 'Milano', '21:00:00.000000', 12000, 350, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11205.572440391401!2d9.133561395442888!3d45.401411867239375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c33fadd79a03%3A0xad236ed9ed2e6d75!2sMediolanum%20Forum!5e0!3m2!1sit!2sit!4v1579275793584!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(31, '2020-09-05', 'Unipol Arena', 'Bologna', '21:00:00.000000', 14000, 3500, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11385.684361220872!2d11.23937649492653!3d44.486037867260215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fd68911c059af%3A0x84c9dbd8d81468cf!2sUnipol%20Arena!5e0!3m2!1sit!2sit!4v1579276224756!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(33, '2020-01-09', 'Ariston', 'Sanremo', '21:00:00.000000', 12000, 50, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11940792.238652587!2d1.7109007558314755!3d43.057577826199875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdf55b8c0716cf%3A0x165b9014bab2a6ba!2sTeatro%20Ariston%20di%20Sanremo!5e0!3m2!1sit!2sit!4v1579275474775!5m2!1sit!2sit\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
(33, '2020-01-10', 'Teatro alla Scala', 'Milano', '21:00:00.000000', 2000, 2, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11192.476978098797!2d9.180817895480406!3d45.467401767250976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6ad891a5757%3A0x1bade948102e834f!2sTeatro%20alla%20Scala!5e0!3m2!1sit!2sit!4v1579276114860!5m2!1sit!2sit\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>');

-- --------------------------------------------------------

--
-- Struttura della tabella `preferenze`
--

CREATE TABLE `preferenze` (
  `IDutente` int(100) NOT NULL,
  `cabaret` int(100) NOT NULL,
  `musical` int(100) NOT NULL,
  `partite` int(100) NOT NULL,
  `manifestazioni` int(100) NOT NULL,
  `internazionali` int(100) NOT NULL,
  `italiane` int(100) NOT NULL,
  `fotografia` int(100) NOT NULL,
  `pittura` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `preferenze`
--

INSERT INTO `preferenze` (`IDutente`, `cabaret`, `musical`, `partite`, `manifestazioni`, `internazionali`, `italiane`, `fotografia`, `pittura`) VALUES
(1, 1, 1, 1, 1, 1, 0, 1, 0),
(2, 1, 1, 0, 0, 0, 1, 0, 1),
(41, 1, 0, 0, 0, 1, 1, 0, 0),
(42, 1, 1, 0, 0, 0, 1, 0, 0),
(43, 0, 1, 0, 1, 0, 1, 0, 0),
(44, 0, 1, 0, 0, 0, 1, 0, 0),
(45, 0, 1, 0, 0, 0, 1, 0, 0),
(46, 0, 1, 0, 0, 0, 0, 0, 0),
(47, 0, 0, 0, 0, 0, 1, 0, 0),
(48, 0, 0, 0, 0, 0, 1, 0, 0),
(49, 1, 0, 0, 0, 0, 1, 0, 0),
(50, 1, 0, 0, 1, 0, 1, 0, 0),
(51, 1, 0, 0, 0, 0, 0, 0, 0),
(52, 1, 0, 0, 1, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `IDutente` int(100) NOT NULL,
  `nomeU` varchar(100) NOT NULL,
  `cognomeU` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `immagineU` varchar(1000) NOT NULL,
  `dataregistrazione` date DEFAULT NULL,
  `tipoaccount` varchar(1000) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `puntiaccumulati` int(100) DEFAULT 0,
  `password` varchar(100) DEFAULT NULL,
  `confermato` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`IDutente`, `nomeU`, `cognomeU`, `nickname`, `immagineU`, `dataregistrazione`, `tipoaccount`, `email`, `puntiaccumulati`, `password`, `confermato`) VALUES
(0, 'Andrea', 'Tassani', 'taax', 'taax.jpg', '2019-12-03', 'amministratore', 'tassocarpinello@live.it', 0, '8616bc66b47e90ead3bd815cefd8ac4d', 0),
(1, 'Michele', 'Torroni', 'mic98', 'michi.jpg', '2019-12-03', 'cliente', 'micheletorroni98@gmail.com', 0, '0fe4f43e1dd173abc07ce508a74800e2', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`nomeA`,`IDartista`),
  ADD UNIQUE KEY `IDartista` (`IDartista`),
  ADD UNIQUE KEY `IDartista_2` (`IDartista`);

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`IDutenteC`,`IDeventoC`,`giornataC`,`acquistato`);

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`IDeventoE`),
  ADD KEY `IDevento` (`IDeventoE`);

--
-- Indici per le tabelle `giorno`
--
ALTER TABLE `giorno`
  ADD PRIMARY KEY (`IDevento`,`giornata`);

--
-- Indici per le tabelle `preferenze`
--
ALTER TABLE `preferenze`
  ADD PRIMARY KEY (`IDutente`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`IDutente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `artista`
--
ALTER TABLE `artista`
  MODIFY `IDartista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
  MODIFY `IDeventoE` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `IDutente` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
