var lastArrowX;
var lastArrowY;

function onHoverFreccia() {
    lastArrowX = event.clientX;
    lastArrowY = event.clientY;
    var elementMouseIsOver = document.elementFromPoint(lastArrowX, lastArrowY);
    var id = elementMouseIsOver.getAttribute('id');
    if(id.includes("Sx")){
        elementMouseIsOver.setAttribute('src', './img/icone/FrecciaSxArancione.png');
    } else if (id.includes("Dx")){
        elementMouseIsOver.setAttribute('src', './img/icone/FrecciaDxArancione.png');
    }
}

function offHoverFreccia() {
    var Logo = document.elementFromPoint(lastArrowX, lastArrowY);
    var id = Logo.getAttribute('id');
    if(id.includes("Sx")){
        Logo.setAttribute('src', './img/icone/FrecciaSx.png');
    } else if (id.includes("Dx")){
        Logo.setAttribute('src', './img/icone/FrecciaDx.png');
    }
}
  
