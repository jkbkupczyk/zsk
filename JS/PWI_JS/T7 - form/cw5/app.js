let result = document.querySelector("#wynik");
let num1, num2;

function update(){
    num1 = parseFloat(document.querySelector("#inp1").value);
    num2 = parseFloat(document.querySelector("#inp2").value);
}

function sum() {
    result.innerHTML = `${num1 + num2}`;
}

function sub() {
    result.innerHTML = `${num1 - num2}`;
}

function mul() {
    result.innerHTML = `${num1 * num2}`;
}

function div() {
    if (num2 == 0) {
        result.innerHTML = "Nie dziel przez 0!";
    } else {
        result.innerHTML = `${num1 / num2}`;
    }
}