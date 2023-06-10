var body = document.querySelector("body");
const back = document.getElementById("back");
const input = document.querySelector("input");
var tit = document.getElementById("tit");
const alles = document.getElementById("alles");
const title = document.getElementById("title");
const text = document.getElementById("text");



back.addEventListener("click", (e) => {
    body.style.backgroundColor = input.value;
});

tit.addEventListener("click", (e) => {
    title.style.color = input.value;
});

alles.addEventListener("click", (e) => {
    body.style.backgroundColor = input.value;
    title.style.color = input.value;
});
