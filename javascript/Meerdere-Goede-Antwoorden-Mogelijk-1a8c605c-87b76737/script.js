const inputElements = document.querySelectorAll('input[type="text"]');
const antwoord = [
    "parijs",
    "8",
    "ijsselmeer",
    ["volkswagen", "audi", "opel", "porsche", "bmw", "mercedes"],
    ["texel", "vlieland", "terschelling", "ameland", "schiermonnikoog"],
];


const checkButton = document.getElementById("checken");
const ja = document.getElementById("ja");
const ks = document.getElementById("kh");


checkButton.addEventListener("click", function () {
    const input1 = document.getElementById("vraag1");
    const input2 = document.getElementById("vraag2");
    const input3 = document.getElementById("vraag3");
    const input4 = document.getElementById("vraag4");
    const input5 = document.getElementById("vraag5");

    let userAnswer = [
        input1.value.toLowerCase(),
        input2.value.toLowerCase(),
        input3.value.toLowerCase(),
        input4.value.toLowerCase(),
        input5.value.toLowerCase(),
    ];


    let goed = 0;

    for (let i = 0; i < antwoord.length; i++) {
        if (userAnswer[i] !== "") {
            if (antwoord[i].includes(userAnswer[i])) {
                inputElements[i].style.backgroundColor = 'green';
                goed++;
            } else {
                inputElements[i].style.backgroundColor = 'red';
            }
        }
    }
    const inputFields = [input1, input2, input3, input4, input5];

    const legeVelden = [];

    for (let i = 0; i < inputFields.length; i++) {
        if (inputFields[i].value === "") {
            legeVelden.push("input " + (i + 1));
        }
    }

    if (legeVelden.length > 0) {
        ks.innerHTML = "Uw heeft volgende vragen niet ingevuld " + legeVelden.join(", ");
    } else {
        ks.innerHTML = "Alle velden zijn ingevuld.";
    }


    if (goed === 5) {
        ja.innerHTML = "Gefeliciteerd! Je hebt alle vragen goed beantwoord!";
    } else {
        ja.innerHTML = "Je hebt " + goed + " van de 5 vragen goed beantwoord.";
    }
});
