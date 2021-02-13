const bttnElems = document.querySelectorAll("button");
const wynik = document.querySelector(".wynik");

bttnElems[0].addEventListener("click", () => {
    const A = parseFloat(document.querySelector("#a").value);
    const B = parseFloat(document.querySelector("#b").value);

    wynik.textContent = `Wynik: ${A + B}`;
});

bttnElems[1].addEventListener("click", () => {
    const A = parseFloat(document.querySelector("#a").value);
    const B = parseFloat(document.querySelector("#b").value);

    wynik.textContent = `Wynik: ${A - B}`;
});

bttnElems[2].addEventListener("click", () => {
    const A = parseFloat(document.querySelector("#a").value);
    const B = parseFloat(document.querySelector("#b").value);

    wynik.textContent = `Wynik: ${A * B}`;
});

bttnElems[3].addEventListener("click", () => {
    const A = parseFloat(document.querySelector("#a").value);
    const B = parseFloat(document.querySelector("#b").value);
    
    wynik.textContent = `Wynik: ${A / B}`;
});

bttnElems[4].addEventListener("click", () => {
    const A = parseFloat(document.querySelector("#a").value);
    const B = parseFloat(document.querySelector("#b").value);

    wynik.textContent = `Wynik: ${Math.pow(A, B)}`;
});