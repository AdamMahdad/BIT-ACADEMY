const speler = document.getElementById("optie");
const schaar = document.getElementById("schaar");
const steen = document.getElementById("steen");
const papier = document.getElementById("papier");
const allButtons = document.querySelectorAll("button");
let resultaat = document.getElementById("resultaat");
let btn = document.createElement("button");
btn.classList.add("wit");
btn.innerHTML = "GAME OVER";
var speler1 = "";
var speler2 = "";
var timesClicked = 0;


allButtons.forEach(button => button.addEventListener("click", (e) => {
    timesClicked++;
    if (timesClicked == 1) {
        speler1 = button.id;
        speler.innerHTML = "Speler 2, kies jouw optie!";
    } else {
        speler2 = button.id;
    }

    if (timesClicked == 2) {
        winner(speler1, speler2);
    }
}));

function winner(a, b) {
    if (a === b) {
        resultaat.innerHTML = "Gelijkspel!";
    } else if (a === "steen" && b === "schaar") {
        resultaat.innerHTML = "speler 1 wint!";
    } else if (a === "schaar" && b === "papier") {
        resultaat.innerHTML = "speler 1 wint!";
    } else if (a === "papier" && b === "steen") {
        resultaat.innerHTML = "speler 1 wint!";
    } else {
        resultaat.innerHTML = "speler 2 wint!";
    }

    reset(document.body.appendChild(btn));
}

function reset() {
    btn.addEventListener("click", (e) => {
        window.location.reload();
    });
}

