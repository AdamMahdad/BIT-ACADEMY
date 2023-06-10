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
function jeweet() {
    let huidigeDatum = new Date();
    let uur = huidigeDatum.getHours();
    let minuten = huidigeDatum.getMinutes();
    let seconen = huidigeDatum.getSeconds();
    let tijdElement = document.getElementById("tijd");
    tijdElement.innerHTML = uur + ":" + minuten + ":" + seconen;
}

setInterval(jeweet, 1000);