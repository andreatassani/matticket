var tendinaAttuale;

function onHoverCategorie()
{
    var item = document.getElementById("Tendina");
    tendinaAttuale = item.getAttribute('src');
    item.setAttribute('src', './img/icone/TendinaArancione.png');
}

function offHoverCategorie()
{
    var item = document.getElementById("Tendina");
    item.setAttribute('src', tendinaAttuale);
}

function clickMenuAPanino(){
        var x = document.getElementById("header");
        var y = document.getElementById("MenuAPanino");

        if (x.className === "Header") {
          x.className += "Open";
          y.setAttribute('src', './img/icone/MenuAPaninoArancione.png');
        } else {
          x.className = "Header";
          y.setAttribute('src', './img/icone/MenuAPanino.png');
        }
}