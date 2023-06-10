const button = document.querySelector("button");

button.onclick = function () {
    let een = Math.round(Math.random() * 255);
    let twee = Math.round(Math.random() * 255);
    let drie = Math.round(Math.random() * 255);

    document.body.style.backgroundColor = "rgb(" + een + "," + twee + "," + drie + ")";
};



