let form = document.getElementById("formentrainement");

form.addEventListener("submit", function formulaire(f)
{
    let nom = document.getElementById("name");
    let prenom = document.getElementById("firstname");
    let email = document.getElementById("email");
    let telephone = document.getElementById("telephone");
    let couleur = document.getElementsByClassName("couleur");
    let reg1 = /^[a-zA-Z]+$/;
    let regmail = /^[a-zA-Z0-9.]+[@]{1}+[a-z.]$/;
    let regphone = /^+[0-9]{2}+[0-9]{10}$/;

    if (nom.value.trim() == "") {
        let erreur = document.getElementsByClassName("error");
        erreur.innerHTML = "Veuillez remplir le champ.";
        erreur.style.color = "red";
        f.preventDefault();
    } else if (reg1.test(nom.value) == false) {
        let erreur = document.getElementsByClassName("error");
        erreur.innerHTML = "Veuillez écrire un nom valable.";
        erreur.style.color = "red";
        f.preventDefault();
    }

    if (prenom.value.trim() == "") {
        let erreur = document.getElementsByClassName("error");
        erreur.innerHTML = "Veuillez remplir le champ.";
        erreur.style.color = "red";
        f.preventDefault();
    } else if (reg1.test(prenom.value) == false) {
        let erreur = document.getElementsByClassName("error");
        erreur.innerHTML = "Veuillez écrire un prénom valable.";
        erreur.style.color = "red";
        f.preventDefault();
    }

    if (email.value.trim() == "") {
        let erreur = document.getElementsByClassName("error");
        erreur.innerHTML = "Veuillez remplir le champ.";
        erreur.style.color = "red";
        f.preventDefault();
    } else if (regmail.test(email.value) == false) {
        let erreur = document.getElementsByClassName("error");
        erreur.innerHTML = "Veuillez écrire une adresse mail valable.";
        erreur.style.color = "red";
        f.preventDefault();
    }

    if (telephone.value.trim() == "") {
        let erreur = document.getElementsByClassName("error");
        erreur.innerHTML = "Veuillez remplir le champ.";
        erreur.style.color = "red";
        f.preventDefault();
    } else if (regphone.test(telephone.value) == false) {
        let erreur = document.getElementsByClassName("error");
        erreur.innerHTML = "Veuillez écrire un numéro de téléphone valable.";
        erreur.style.color = "red";
        f.preventDefault();
    }

    if (couleur == "") {
        let erreur = document.getElementsByClassName("error");
        erreur.innerHTML = "Veuillez cocher une case.";
        erreur.style.color = "red";
        f.preventDefault();
    }

});