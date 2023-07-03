let taille = 0;
let t = parseInt(window.prompt("Veuillez saisir la taille du tableau :"));
let tableau = [];

while (taille < t)
{
    tableau [taille] = [window.prompt("Veuillez saisir une valeur :")];
    taille++;
}

console.table(tableau);