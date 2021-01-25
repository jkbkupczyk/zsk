let figura = prompt("Wybierz figurę:\nprostokąt\nkwadrat\nkoło\ntrapez");
let wynik;

switch (figura){
    case "prostokąt":
        let a = parseFloat(prompt("Podaj bok a: "));
        let b = parseFloat(prompt("Podaj bok b: "));

        document.write(`Bok a = ${a}<br> Bok b = ${b} <br> Pole = ${a*b}`);
        break;

    case "kwadrat":
        let x = parseFloat(prompt("Podaj bok x: "));

        document.write(`Bok x = ${x}<br> Pole = ${x*x}`);
        break;
    
    case "koło":
        let r = parseFloat(prompt("Podaj promień koła: "));

        document.write(`Promień r = ${r}<br> Pole koła = ${(Math.PI*r*r).toFixed(4)} (słownie: ${r*r}π)`);
        break;

    case "trapez":
        let g = parseFloat(prompt("Podaj podstawe a: "));
        let d = parseFloat(prompt("Podaj podstawe b: "));
        let h = parseFloat(prompt("Podaj wysokość h: "));

        document.write(`Podstawa a = ${g}<br> Podstawa b = ${d} <br> Pole = ${((g+d)*h) / 2}`);
        break;

    default:
        document.write("Podałeś błędną figurę");
        break;
}