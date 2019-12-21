var tendinaAttuale;
var paninoAttuale;
var lastId;
var lastX;
var lastY;


function clickMenuAPanino(){
  console.log("qui");
  var x = document.getElementById("header");
  var y = document.getElementById("MenuAPanino");
  var xc = event.clientX;
  var yc = event.clientY;
  var elementMouseIsOver = document.elementFromPoint(xc, yc);
  if(elementMouseIsOver.getAttribute("id") != null && elementMouseIsOver.getAttribute("id").includes("Panino") && x.className === "Header"){
    console.log("qui");
    x.className += "Open";
    paninoAttuale = y.getAttribute('src');
    y.setAttribute('src', './img/icone/MenuAPaninoArancione.png');
  } else if(elementMouseIsOver.getAttribute('class') != "dropbtn"){
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

window.onscroll = function() {myFunction()};

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  // Get the header
var header = document.getElementById("header");
// Get the offset position of the navbar
var sticky = header.offsetTop;
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}



function clickCerca() {
  var xc = event.clientX;
  var yc = event.clientY;
  var elementMouseIsOver = document.elementFromPoint(xc, yc);
  if(elementMouseIsOver.getAttribute("id") != null && elementMouseIsOver.getAttribute("id").includes("Cerca")){
    var click = document.getElementById("inputCerca");
  click.setAttribute('value', "");
  } else {
  var click = document.getElementById("inputCerca");
  click.setAttribute('value', "Cerca");
  }
}

