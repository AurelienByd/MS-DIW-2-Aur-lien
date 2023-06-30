//Exercice 1

// let r = 1;
// var p;

// while (p != "")
// {
//     p = window.prompt("Saisissez le prénom N°" + r);
//     r++;
//     console.log(p);
// }
// console.log("nombre de prénoms : " + (r-2));

//Exercice 2

// var N = window.prompt("Ecrire un nombre :");

// while (N != 0)
// {
//     N--;
//     console.log(N);
// }

//Exercice 3



//Exercice 4

let X = window.prompt("Saisir un nombre :");
let N = window.prompt("Combien de multiples :");
let R;

while (N != 0)
{
    R = N*X;
    console.log(N + " x " + X + " = " + R);
    N--;
}