let sel = document.querySelector("#sele");

sel.addEventListener("change", () => {
    let inp1 = parseFloat(document.getElementById("inp1").value);
    let inp2 = parseFloat(document.getElementById("inp2").value);
    let result = document.getElementById("res").innerHTML;

    let operator = document.getElementById("sele").value;

    switch (operator) {
        case '+':

        console.log(operator);
            result = inp1 + inp2;

            break;

        case '-':
            result = inp1 - inp2;

            break;

        case '*':
            result = inp1 * inp2;

            break;

        case '/':
            result = inp1 / inp2;

            break;
    }
});