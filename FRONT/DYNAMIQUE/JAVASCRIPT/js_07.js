//Exercice 1

const n = window.prompt("Ecrivez un nombre :");

if (n%2 == 0)
{
    window.alert("Ce nombre est pair");
}
else
{
    window.alert("Ce nombre est impair");
}

//Exercice 2

const y = 2023;
const by = window.prompt("Quelle est votre année de naissance ?");

if (y-by < 18)
{
    const age = y-by;
    window.alert(age + " ans, mineur");
}
else if (y-by >= 18)
{
    const age = y-by;
    window.alert(age + " ans, majeur");
}

//Exercice 3

const n1 = parseInt(window.prompt("Saisir un nombre :"));
const n2 = parseInt(window.prompt("Saisir un nombre :"));
const o = window.prompt("Saisir un opérateur");

if (o == "+")
{
    window.alert(n1 + n2);
}
if (o == "-")
{
    window.alert(n1 - n2);
}
if (o == "*")
{
    window.alert(n1 * n2);
}
if (o == "/" && n2 == 0)
{
    window.alert("Erreur division par 0");
}
else if (o == "/" && n2 != 0)
{
    window.alert(n1 / n2);
}
if (o != "+" && o != "-" && o != "*" && o != "/")
{
    window.alert("Erreur opérateur");
}