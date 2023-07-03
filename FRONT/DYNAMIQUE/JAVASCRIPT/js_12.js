let taille = 0;
let v;
let tableau = Array();

while (v != 0)
{
    tableau [taille] = [v = parseInt(window.prompt("Veuillez saisir une valeur numérique :"))];
    taille++;
}

console.table(tableau);
console.log("Il y a " + tableau.length + " valeurs saisies");