var tendinaAttuale;
var paninoAttuale;
var lastId;
var lastX;
var lastY;


function clickMenuAPanino(){
  var x = document.getElementById("header");
  var y = document.getElementById("MenuAPanino");
  if (x.className === "Header") {
    x.className += "Open";
    paninoAttuale = y.getAttribute('src');
    y.setAttribute('src', './img/icone/MenuAPaninoArancione.png');
  } else {
    x.className = "Header";
    y.setAttribute('src', paninoAttuale);
  }
}

function onHoverCategorie(){
  var item = document.getElementById("Tendina");
  tendinaAttuale = item.getAttribute('src');
  item.setAttribute('src', './img/icone/TendinaArancione.png');
}

function offHoverCategorie(){
  var item = document.getElementById("Tendina");
  item.setAttribute('src', tendinaAttuale);
}



function onHoverGenerico() {
  var x = event.clientX;
  var y = event.clientY;
  var elementMouseIsOver = document.elementFromPoint(x, y);
  var id = elementMouseIsOver.getAttribute('id');
  if(id != null && id.includes("li")){
    lastX = x;
    lastY = y;
    lastId = id;
    id = id.replace("li", "");
    if(id.includes("Alto")){
      id = id.replace("Alto", "");
    }
    var logo = document.getElementById(id);
    var srcLogo = logo.getAttribute('src');
    if(!srcLogo.includes("Arancione")){
      srcLogo = srcLogo.replace(".png", "Arancione.png");
    }
    logo.setAttribute('src', srcLogo);
  }
}
  
function offHoverGenerico() {
  X = event.clientX;
  Y = event.clientY;
  var elementMouseIsOver = document.elementFromPoint(X, Y);
  if(elementMouseIsOver.tagName != "H1" && elementMouseIsOver.tagName != "IMG" && elementMouseIsOver.tagName != "A" ){
    var elementMouseIsOver = document.elementFromPoint(lastX, lastY);
    var id = elementMouseIsOver.getAttribute('id');
    if(id != null && id.includes("li")){
      id = id.replace("li", "")
      if(id.includes("Alto")){
        id = id.replace("Alto", "");
      }
      var logo = document.getElementById(id);
      var srcLogo = logo.getAttribute('src');
      srcLogo = srcLogo.replace("Arancione.png", ".png");
      logo.setAttribute('src', srcLogo);
    }
  } 
}