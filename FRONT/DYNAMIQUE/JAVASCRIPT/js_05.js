//Exercice 1

const name = window.prompt("Quel est votre nom ?");
const fname = window.prompt("Quel est votre prénom ?");

window.alert(fname + " " + name);

//Exercice 2

const p1 = parseInt(window.prompt("Ecrire un nombre :"));
const p2 = parseInt(window.prompt("Ecrire un nombre :"));

window.alert("Le produit vaut " + p1 * p2);

//Exercice 3

var c = parseInt(window.prompt("Quelle est la température en Celsius ?"));

window.alert("La température en Fahrenheit est de " + ((c*9/5)+32) + "°");