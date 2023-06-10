function gooiButton() {
    bal.gooi();
}

function vangButton() {
    bal.vang();
}

function resetButton() {
    bal.reset();
}


var bal = {
    canvasBal: constructBal(),
    balPositie: "links",
    errorTekst: document.getElementById("error"),

    gooi: function () {
        try {
            if (this.balPositie !== "links") {
                throw new Error("bal is al gegooit");
            }
            this.draw(300, 50);
            this.balPositie = "midden";
        } catch (error) {
            this.errorTekst.innerHTML = error.message;
        }
    },
    
    vang: function () {
        try {
            if (this.balPositie !== "midden") {
                throw new Error("je kan de bal niet vangen");
            }
            this.draw(500, 250);
            this.balPositie = "rechts";
        } catch (error) {
            this.errorTekst.innerHTML = error.message;
        }
    },
    
    reset: function () {
        try {
            if (this.balPositie === "links") {
                throw new Error("de bal is al gereset");
            }
            this.draw(100, 250);
            this.balPositie = "links";
        } catch (error) {
            this.errorTekst.innerHTML = error.message;
        }
    },
    

    draw: function (x, y) {
        this.canvasBal.clearRect(0, 0, 600, 300);
        this.canvasBal.beginPath();
        this.canvasBal.arc(x, y, 50, 0, 2 * Math.PI);
        this.canvasBal.closePath();
        this.canvasBal.fill();
    }
}

function constructBal() {
    let bal = document.getElementById("bal").getContext("2d");
    bal.fillStyle = "red";
    bal.beginPath();
    bal.arc(100, 250, 50, 0, 2 * Math.PI);
    bal.closePath();
    bal.fill();
    return bal
}
