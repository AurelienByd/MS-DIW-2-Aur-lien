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

//var n = parseInt(window.prompt("Saisir un nombre :"));
//var s = 0;
//var m = 0;

//while (n < 0 || n > 0)
//{
//    s = s + n;
//    m++;
//    n = parseInt(window.prompt("Saisir un nombre :"));
//}
//console.log("La somme : " + s);
//console.log("La moyenne : " + (s/m));

//Exercice 4

//let X = window.prompt("Saisir un nombre :");
//let N = window.prompt("Combien de multiples :");
//let R;

//if (N > 0)
//{
//while (N != 0)
//{
//    R = N*X;
//    console.log(N + " x " + X + " = " + R);
//    N--;
//}
//}
//else if (N < 0)
//{
//while (N != 0)
//{
//    R = N*X;
//    console.log(N + " x " + X + " = " + R);
//    N++;
//}
//}

//Exercice 5

var mot = window.prompt("Saisir un mot :");

let nbvoyelles = 0;
let lvoyelles = ["a", "e", "i", "o", "u", "y"];

    if (mot.includes(lvoyelles))
    {
        nbvoyelles++;
    }

console.log(nbvoyelles);