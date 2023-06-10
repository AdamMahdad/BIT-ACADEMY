document.querySelector("h1").innerText = document.querySelector("title").innerText;
document.querySelectorAll("h1").classList
const p = document.querySelectorAll("p");
const nummer = document.querySelector("#number");
const spa = document.querySelector("h2");

function clom(element) {
    element.classList.add('geel');
}

p.forEach(clom);

function ribba(leeftijd) {
    if (leeftijd > 18) {
        spa.innerText = "je mag ve ht";
    }else{
        spa.innerText = "nee ";
    }; 
    
};

ribba(nummer);