const audio1 = document.getElementById("audio1");
const audio2 = document.getElementById("audio2");
const audio3 = document.getElementById("audio3");
const audio4 = document.getElementById("audio4");
const audio5 = document.getElementById("audio5");
const audio6 = document.getElementById("audio6");

const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");
const button3 = document.getElementById("button3");
const button4 = document.getElementById("button4");
const button5 = document.getElementById("button5");
const button6 = document.getElementById("button6");

button1.addEventListener("click", function () {
    audio1.play();
});

button2.addEventListener("click", function () {
    audio2.play();
});

button3.addEventListener("click", function () {
    audio3.play();
});

button4.addEventListener("click", function () {
    audio4.play();
});

button5.addEventListener("click", function () {
    audio5.play();
});

button6.addEventListener("click", function () {
    audio6.play();
});
