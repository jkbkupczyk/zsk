// Fill array with rand numbers in range min --- max
const rand = (n, min, max) => {
    return [...Array(n)].map(() => Math.round(Math.random() * (max - min + 1)) + min);
}
// ...VAR - rest parameters

const tab = rand(100, 1, 100);

const num = (arr) => {
    let sum = 0;

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] == Math.max(...arr)) { sum += arr[i] }
    }

    return sum;
};

const evenNumbers = (arr) => {
    return arr.filter(elem => elem % 2 != 0);
};

const oddIndices = (arr) => {
    let arrTemp = new Array();

    for (let i = 0; i < arr.length; i++) {
        if (i % 2 != 0) { arrTemp.push(i) }
    }

    return arrTemp;
};

const numInRange = (arr, min, max) => {
    return arr.filter(elem => elem >= min && elem < max);
};