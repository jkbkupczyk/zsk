//Jakub Kupczyk 4C gr. 1/2

//Function expression
function pow(x) {
    return x*x;
}


//IIFE with default parameter
var x = 5;
var IIFE = (function powIIFE(x=3){ return x*x; }(5));

console.log("IIFE(immediately invoked function expression):", IIFE); // Output: 25


//Rest parameters
function cur(...restParameters) {
    let sum = 0;
    for (let i = 0; i < restParameters.length - 1; i++) {
        if(i%4 == 0){
            sum += Math.sqrt((restParameters[i+3] - restParameters[i])**2 + (restParameters[i+1] - restParameters[i+2])**2);
        }
    }
    return sum.toFixed(4);
}

console.log("Rest parameters: ", cur(1, 1, 2, 2), "\n"); // Output: 1.4142


//Function for solving quadratic equation
function equation(a, b, c){
    let delta = b**2 - (4*a*c);
    if(delta < 0) { return "none"; }
    else if(delta === 0) { return -b/2*a; }
    else {
        let x1 = -b - (Math.sqrt(delta)/2*a);
        let x2 = -b + (Math.sqrt(delta)/2*a);
        return  `${x1} i ${x2}`; 
    }
}

//Nested function
function printEquation(equation, a, b, c){
    console.log("Nested function: ",equation(a, b, c));
}

//Function variable
let someEquation = equation(1, 0, -4);
console.log("Function variable: ", someEquation); // -2 i 2

printEquation(equation, 1, 4, 4);

//Arrow function
let arrowFun = (a, b, c) => {
    let delta = b**2 - (4*a*c);
    if(delta < 0) { return "none"; }
    else if(delta === 0) { return -b/2*a; }
    else {
        let x1 = -b - (Math.sqrt(delta)/2*a);
        let x2 = -b + (Math.sqrt(delta)/2*a);
        return  `${x1} i ${x2}`; 
    }
}

console.log("Arrow function: ", arrowFun(1, 0, 4));

//Anonymous function
let anonymousFun = function(equation, a, b, c) { return equation(a, b, c) };
let anon = anonymousFun(equation, 1, 2, 3);
console.log("Anonymous functon: ", anon);