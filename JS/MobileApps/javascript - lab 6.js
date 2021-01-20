// Jakub Kupczyk 4C gr. 1/2

// Map
// Country -> Population (in millions)
let citizenRate = new Map([
    ["Poland", 39],
    ["France", 67]
]);

citizenRate.set("Germany", 83);
citizenRate.delete("Poland");

citizenRate.forEach( (value, key) => {
        console.log(`Population in ${key}: ${value} millions`)
    }
);

console.log("\nEntries: ", citizenRate.entries(), "\nKeys: ", citizenRate.keys(), "\nValues: ", citizenRate.values());

// Clears map
citizenRate.clear();

/*
for ( key of citizenRate.keys()){
    console.log(key);
}

for ( value of citizenRate.values()){
    console.log(value);
}
*/

// Set
const set = new Set(
    [1, 2, 3, 4, 5, 6, 7, 8, 9]
);

const set1 = new Set("Kajak");