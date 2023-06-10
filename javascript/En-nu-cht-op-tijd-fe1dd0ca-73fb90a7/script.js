const diameter = document.getElementById("number");
const button = document.getElementById("button");
const haaf = document.getElementById("so");
const af = document.getElementById("co");

button.addEventListener("click", (e) => {
    var waarde = diameter.value * 3.14;
    haaf.innerText = waarde.toFixed(2);
});

button.addEventListener("click", (e) => {
    let waarde = diameter.value * diameter.value * 3.14 * 0.25;
    af.innerText = waarde.toFixed(2);
});

function updateTijd() {
    let huidigeDatum = new Date();
    let uur = huidigeDatum.getHours();
    let minuten = huidigeDatum.getMinutes();
    let seconden = huidigeDatum.getSeconds();
    let amPm = uur >= 12 ? "PM" : "AM";
    if (uur > 12) {
        uur -= 12;
    }
    if (uur === 0) {
        uur = 12;
    }
    if (uur < 10) {
        uur = "0" + uur;
    }
    if (minuten < 10) {
        minuten = "0" + minuten;
    }
    if (seconden < 10) {
        seconden = "0" + seconden;
    }
    let tijdElement = document.getElementById("tijd");
    tijdElement.innerHTML = uur + ":" + minuten + ":" + seconden + " " + amPm;
}

updateTijd();

setInterval(updateTijd, 1000);
