//  1. Napisz program losujący i wypisujący tablicę n liczb całkowitych.
//      Następnie wypisz użytkownikowi jakie cyfry pojawiły ile razy.

const rand = (n, min = 1, max = 10) => {
    return [...Array(n)].map(() => Math.round(Math.random() * (max - min + 1)) + min);
}

const arr = rand(5);
const set = new Set();

for (let i = 0; i < arr.length; i++) {
    console.log(`${arr[i]}, `);
    set.add(arr[i]);
}

//  2. Napisz program który wylosuje i wypisze tablicę liczb całkowitych nieujemnych,
//      a następnie gdy użytkownik poda poprzez input swoją liczbę, poinformuje go czy ta liczba jest w tablicy czy nie ma jej.
let number = prompt();

console.log(`Czy tablica zawiera ${number}? : ${arr.includes(number)}`);
