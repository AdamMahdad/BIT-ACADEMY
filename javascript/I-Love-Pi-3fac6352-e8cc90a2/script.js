const diameter = document.getElementById("number");
const button = document.getElementById("button");
const haaf = document.getElementById("so");

button.addEventListener("click", (e) => {
    const waarde = diameter.value * 3.14;
    haaf.innerText = waarde;
});