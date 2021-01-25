let wynik = 0;
let quit;

while (true) {
    wynik += parseFloat(prompt("Podaj liczbę: "));

    quit = prompt("Zakończyć? (y/n)") === "y" ? true : false;

    if (quit) {
        break;   
    }
}

document.write(`Wynik: ${wynik}`);