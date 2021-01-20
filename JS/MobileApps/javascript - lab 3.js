// Jakub Kupczyk 4C gr. 1/2


// Task 1 - Area of any polygon
class Vertice {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }

    getX(){
        return this.x;
    }

    getY(){
        return this.y;
    }
}

class Polygon {
    constructor(vertices){
        this.vertices = vertices;
    }

    polyArea(){
        let num = 0;

        for(let i = 0; i < this.vertices.length - 1; i++){
            num += ((this.vertices[i].getX()) * (this.vertices[i+1].getY())) - ((this.vertices[i].getY()) * (this.vertices[i+1].getX()));
        }

        return Math.abs(num/2);
    }
}

let verticesArr = [
    new Vertice(4, 10),
    new Vertice(9, 7),
    new Vertice(11, 2),
    new Vertice(2, 2),
    new Vertice(4, 10)
];

let squareArr = [
    new Vertice(1, 1),
    new Vertice(0, 3),
    new Vertice(3, 0),
    new Vertice(3, 3)
];

let poly = new Polygon(verticesArr);
let square = new Polygon(squareArr);

console.log("poly area: ", poly.polyArea(), "\nsquare Area: ", square.polyArea()); // Output: 45.5 and 1.5



// Task 2 - BST Tree
class Node {
    constructor(value){
        this.left = null;
        this.right = null;
        this.value = value;
    }
}

class Tree {
    constructor(){
        this.root = null;
    }

    createTree(nodes){
        for (let i = 0; i < nodes.length; i++) {
            if(this.root == null){
                this.root = nodes[i];
            }
            else {
                this.insertNode(this.root, nodes[i]);
            }
        }
    }

    insertNode(root, node){
        if(node.value < root.value){
            if(root.left == null){
                root.left = node;
            }
            else{ this.createTree(root.left, node); }
        }
        else{
            if(root.right == null){
                root.right = node;
            }
            else { this.createTree(root.right, node); }
        }
    }
}

let nodes = [
    new Node(100),
    new Node(20),
    new Node(12),
    new Node(16),
    new Node(77),
    new Node(56),
    new Node(67)
];

let tree = new Tree();
tree.createTree(nodes);

// Task 3 - Person phonebook
class Person {
    constructor(name, surName, address, birthDate, birthPlace){
        this.name = name;
        this.surName = surName;
        this.address = address;
        this.birthDate = birthDate;
        this.birthPlace = birthPlace;
    }
}

function match(people, criteria){
    if(people.name == criteria || people.surName == criteria || people.address == criteria || people.birthDate == criteria || people.birthDate == criteria) {
        return true;
    }
    return false;
}

function findPerson(people, ...criteria){
    let tab = [];

    for (let i = 0; i < people.length; i++){
        for(let j = 0; j < criteria.length; j++){
            if(match(people[i], criteria[j])){ 
                tab.push(people[i]);
            }
        }
    }
    return tab;
}

let people = [
    new Person("Jakub", "Kupczyk", "Plewiska", "01-06-2001", "Poznan"),
    new Person("Jakub", "Kowalski", "Konin", "22-22-2222", "Konin"),
    new Person("Ala", "Makota", "Konin", "11-11-1111", "Konin")
];

console.table(findPerson(people, "Jakub")); // Output: "Jakub Kupczyk" from "Poznan" and "Jakub Kowalski" from "Konin"
console.table(findPerson(people, "11-11-1111")); // Output: "Ala Makota"