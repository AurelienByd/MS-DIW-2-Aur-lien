let taille = 0;
let v;
let somme = 0;
let tableau = Array();

while (v != 0)
{
    tableau [taille] = [v = parseInt(window.prompt("Veuillez saisir une valeur numérique :"))];
    somme = somme + v;
    taille++;
}

console.table(tableau);
console.log("Il y a " + tableau.length + " valeurs saisies");
console.log("La somme est " + somme);
console.log("La moyenne est " + (somme/taille));