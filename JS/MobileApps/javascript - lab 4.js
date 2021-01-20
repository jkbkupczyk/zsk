// Jakub Kupczyk 4C gr. 1/2

let tab = (str) => {
    console.log(`\t${str}`);
}

// Exercises num. 1 from - https://www.w3resource.com/javascript-exercises/javascript-array-exercises.php

//Ex 1.1 - Write a JavaScript function to check whether an `input` is an array or not
tab("Ex 1.1");

function a(arr){
    return Array.isArray(arr);
}

let arr = [1, 2, 3, 4, 5];
let arr2 = "Hello world!";

console.log("Array: " + a(arr) + "\nString: " + a(arr2) + "\n");

// Ex 1.2 - Write a JavaScript function to clone an array
tab("Ex 1.2");

function clone(arr){
    let arrClone = [];

    for (let i = 0; i < arr.length; i++){
        arrClone[i] = arr[i];
    }

    return arrClone;
}

let arrToClone = ['a', 5, 6, 1, 10, 'abc'];
let newArr = clone(arrToClone);
console.log("New array: " + newArr + "\n");

// Ex 1.3 - Write a JavaScript function to get the first element of an array. Passing a parameter 'n' will return the first 'n' elements of the array
tab("Ex 1.3");

function firstElem(arr, n){
    if(n == null){
        return arr[0];
    }
    else if(n < 0){
        return "Invalid argument";
    }
    else{
        return arr.slice(0 , n);
    }
}

let arr3 = [9, 7, 4, 1, 5, 'X'];
console.log("Without n argument: " + firstElem(arr3));
console.log("With n argument: " + firstElem(arr3, 2));
console.log("When n is < 0: " + firstElem(arr3, -2) + "\n");


// Ex 1.4 - Write a JavaScript function to get the last element of an array. Passing a parameter 'n' will return the last 'n' elements of the array
tab("Ex 1.4");

function lastElem(arr, n){
    if(n == null){
        return arr[arr.length - 1];
    }
    else if(n < 0){
        return "Invalid argument";
    }
    else{
        return arr.slice(arr.length - n);
    }
}

let arr4 = [1, 1, 2, 3, 5, 8, 13];

console.log("Last 3 elements: " + lastElem(arr4, 3) + "\nof table " + arr4 + "\n");


// Ex 1.5 - Write a simple JavaScript program to join all elements of the following array into a string
tab("Ex 1.5");

function toStr(arr){
    let str = "";

    for (let i = 0; i < arr.length; i++){
        str += arr[i];
    }

    return str;
}

let arr5 = ['J', 4, 'K', 'U', 8];
let strArr = toStr(arr5);

console.log("Array: " + strArr + "\nOf type: " + typeof strArr + "\n");


console.log("-------------- NEW EXERCISES --------------");
// Exercises num. 2 from - https://www.w3resource.com/javascript-exercises/javascript-object-exercises.php

// Ex 2.1 - Write a JavaScript program to list the properties of a JavaScript object
tab("Ex 2.1");

function listProp(obj){
    let k = Object.keys(obj);
    let s = "";

    for (let i = 0; i < k.length; i++) {
        s += k[i] + " ";
    }

    return s;
}

let polygon = {
    name: "Square",
    vertices: [[1, 2], [1, 0], [4, 2], [4, 0]],
    getName(){ return this.name; }
};

console.log(listProp(polygon) + "\n");


// Ex 2.2 - Write a JavaScript program to delete the rollno property from the following object. Also print the object before or after deleting the property
tab("Ex 2.2");

function delLastProp(obj, prop){
    delete obj[prop];
}

let student = {
    name : "David Rayy",
    sclass : "VI",
    rollno : 12
};

console.log("Before del: " + Object.keys(student));

delLastProp(student, 'name');

console.log("After del: " + Object.keys(student) + "\n");

// Ex 2.3 - Write a JavaScript program to get the length of a JavaScript object
tab("Ex 2.3");

let student2 = {
    name : "David Rayy",
    sclass : "VI",
    rollno : 12
}

function objLen(obj){
    return Object.keys(obj).length;
}

console.log("Length of object student2: " + objLen(student2) + "\n");

// Ex 2.4 - Write a JavaScript program to display the reading status (i.e. display book name, author name and reading status) of the following books
tab("Ex 2.4");

function bookStatus(tab){
    for (let i = 0; i < tab.length; i++){
        if(tab[i].readingStatus){
            console.log(`You don't have to read ${tab[i].title} by ${tab[i].author}`);
        }
        else{
            console.log(`You need to read ${tab[i].title} by ${tab[i].author}`);
        }
    }
}

let library = [ 
    {
        author: 'Bill Gates',
        title: 'The Road Ahead',
        readingStatus: true
    },
    {
        author: 'Steve Jobs',
        title: 'Walter Isaacson',
        readingStatus: true
    },
    {
        author: 'Suzanne Collins',
        title:  'Mockingjay: The Final Book of The Hunger Games', 
        readingStatus: false
    }];

bookStatus(library);
console.log("");

// Ex 2.5 - Write a JavaScript program to get the volume of a Cylinder with four decimal places using object classes
tab("Ex 2.5");

function Cylinder(_radius, _height){
    this.radius = _radius;
    this.height = _height;
}

function getVol(cylinder){
    return (Math.PI * cylinder.radius**2 * cylinder.height).toFixed(4);
}

let cyl1 = new Cylinder(10, 15);

console.log("Volume of cylinder: " + getVol(cyl1) + "\n");