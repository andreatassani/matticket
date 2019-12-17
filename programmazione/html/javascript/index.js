function onHoverCategorie()
{
    var item = document.getElementById("Tendina");
    item.setAttribute('src', './img/icone/TendinaAperto.png');
}

function offHoverCategorie()
{
    var item = document.getElementById("Tendina");
    item.setAttribute('src', './img/icone/Tendina.png');
}

function clickMenuAPanino(){
        var x = document.getElementById("header");
        var y = document.getElementById("MenuAPanino");

        if (x.className === "Header") {
          x.className += "Open";
          y.setAttribute('src', './img/icone/MenuAPaninoAperto.png');
        } else {
          x.className = "Header";
          y.setAttribute('src', './img/icone/MenuAPanino.png');
        }
}
