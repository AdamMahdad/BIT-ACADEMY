const answers = ["parijs", "8", "acht", "ijsselmeer"];

const vraag1 = document.getElementById("vraag1");
const vraag2 = document.getElementById("vraag2");
const vraag3 = document.getElementById("vraag3");
const checkButton = document.getElementById("checken");
const ja = document.getElementById("ja");

checkButton.addEventListener("click", function () {
    const userAnswer1 = vraag1.value.toLowerCase();
    const userAnswer2 = vraag2.value.toLowerCase();
    const userAnswer3 = vraag3.value.toLowerCase();

    let correctAnswers = 0;

    if (userAnswer1 === answers[0]) {
        vraag1.style.backgroundColor = "green";
        correctAnswers++;
    } else {
        vraag1.style.backgroundColor = "red";
    }

    if (userAnswer2 === answers[1] || userAnswer2 === answers[2]) {
        vraag2.style.backgroundColor = "green";
        correctAnswers++;
    } else {
        vraag2.style.backgroundColor = "red";
    }

    if (userAnswer3 === answers[3]) {
        vraag3.style.backgroundColor = "green";
        correctAnswers++;
    } else {
        vraag3.style.backgroundColor = "red";
    }

    if (correctAnswers === 3) {
        ja.innerHTML = "Gefeliciteerd! Je hebt alle vragen goed beantwoord!";
    } else {
        ja.innerHTML = "Je hebt " + correctAnswers + " van de 3 vragen goed beantwoord.";
    }
});
