const bttnElem = document.querySelector('button');
const tabElem = document.querySelector('.main__tab');
const inputElems = document.querySelectorAll('input[type=text]');

const isValid = (num1, num2) => {
    return num2 < num1 ? false : true;
}

const invalidData = () => {
    tabElem.innerHTML = "";
    const info = document.createElement('strong');

    info.innerText = 'Początek nie może być większy od końca';
    tabElem.appendChild(info);
}

const render = (a, b) => {
    tabElem.innerHTML = "";
    if (tabElem.childNodes.length) { tabElem.removeChild(tabElem.firstChild); }

    const headerElem = document.createElement('p');
    headerElem.innerText = `a = ${a}, b = ${b}`;

    const rootElem = document.createElement('div');
    rootElem.classList.add('root');

    for (let i = a - 1; i < b + 1; i++) {

        const row = document.createElement('div');
        row.classList.add('row');

        for (let j = a - 1; j < b + 1; j++) {
            const col = document.createElement('div');

            if (i > a - 1 && j > a - 1) { col.textContent = i * j; }
            else if (i == a - 1 && j == a - 1) { col.textContent = " "; }
            else if ((i == a - 1 && j > a - 1)) { col.innerHTML = `<strong>${j}</strong>`; }
            else if ((j == a - 1 && i > a - 1)) { col.innerHTML = `<strong>${i}</strong>`; }

            row.appendChild(col);
        }

        rootElem.appendChild(row);
    }

    tabElem.append(headerElem, rootElem);
}

bttnElem.addEventListener('click', () => {
    const a = parseInt(inputElems[0].value);
    const b = parseInt(inputElems[1].value);

    isValid(a, b) ? render(a, b) : invalidData();
});
