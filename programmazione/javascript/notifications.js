

function handleVisibilityChange() {
    if (document.hidden) {
      // Messaggio se la pagina è nascosta
      notify('Alla prossima!'); 
    } else {
      // Messaggio se la pagina è visibile
      notify('Bentornato su MatTicket!'); 
    }
  }

function notify(message) {
    // Controlliamo se il browser supporta le notifiche
    if (!("Notification" in window)) {
        alert("Questo browser non supporta le Notification API, usa un browser moderno");
    }

    // Controlliamo se l'utente accetta le nostre notifiche
    else if (Notification.permission === "granted") {
        // Se è tutto a posto, creiamo una notifica
        var notification = new Notification(message);
    }

    // Se l'utente non ha accettato le notifiche, chiediamo il permesso
    else if (Notification.permission !== 'denied') {
        Notification.requestPermission(function (permission) {
            // Se è tutto a posto, creiamo una notifica
            if (permission === "granted") {
                var notification = new Notification(message);
            }
        });
    }
}
// Veriabili di controllo
var hidden, visibilityChange; 

// Controllo tipo di evento
if (typeof document.hidden !== "undefined") { //Per tutti i browser moderni
  hidden = "hidden";
  visibilityChange = "visibilitychange";
} else if (typeof document.mozHidden !== "undefined") { // Firefox fino v17
  hidden = "mozHidden";
  visibilityChange = "mozvisibilitychange";
} else if (typeof document.webkitHidden !== "undefined") { // Chrome fino v32, Android fino v4.4, Blackberry fino v10
  hidden = "webkitHidden";
  visibilityChange = "webkitvisibilitychange";
}

if (typeof document.addEventListener === "undefined" || typeof document.hidden === "undefined") {
    // Lascio un messaggio se il browser non supporta le Page Visibility API
    alert("Hai bisogno di un browser moderno per utilizzare le Page Visibility API.");
} else {
    // Se tutto va bene mi metto in ascolto dell'evento visibilityChange
    document.addEventListener(visibilityChange, handleVisibilityChange, false);
}
