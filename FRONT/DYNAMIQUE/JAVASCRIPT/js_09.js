//Exercice 1
// var x;
// var y;


// function produit(x, y)
// {
//     x = window.prompt("entrez un nombre :");
//     y = window.prompt("entrez un multiplicateur :");
//     var p = document.getElementById("a");
//     var q = document.getElementById("b");
//     p.innerHTML = "Le cube de " + x + " est égal à " + (x*x*x);
//     q.innerHTML = "Le produit de " + x + " x " + y + " est égal à " + (x*y);
//     return;
// }

// produit(x, y)

//Exercice 2

// const str1 = "robert; dupont; amiens; 80600";
// const str2 =";";

// const n = str1.split(str2);
// console.log(n[2]);

let str1;
let str2;
let n;

function tableau(str1, str2, n) {
    str1 = "robert; dupont; amiens; 80600";
    str2 =";";
    n = str1.split(str2);
    console.log(n[2]);
}

tableau(str1, str2, n);