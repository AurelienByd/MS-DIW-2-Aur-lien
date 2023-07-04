var form = document.getElementById("formjs16");

form.addEventListener("submit", function(f)
{
    var societe = document.getElementById("societe");
    var contacter = document.getElementById("contacter");
    var codepostal = document.getElementById("codepostal");
    var ville = document.getElementById("ville");
    var email = document.getElementById("email");

    var filtre1 = /^[a-zA-Z0-9]+$/;
    var filtre2 = /^[0-9]{5}$/;
    var filtre3 = /^[@]+$/;


    if (filtre1.test(societe.value) == false)
    {
        var span = document.getElementById("span1");
        span.innerHTML = "Entrez le nom de la société";
        span.style.color = 'red';
        f.preventDefault();
    }

    if (filtre1.test(contacter.value) == false)
    {
        var span = document.getElementById("span2");
        span.innerHTML = "Entrez le nom de la personne à contacter";
        span.style.color = 'red';
        f.preventDefault();
    }

    if (filtre2.test(codepostal.value) == false)
    {
        var span = document.getElementById("span3");
        span.innerHTML = "Le code postal doit comporter cinq chiffres";
        span.style.color = 'red';
        f.preventDefault();
    }

    if (filtre1.test(ville.value) == false)
    {
        var span = document.getElementById("span4");
        span.innerHTML = "Entrez le nom de la ville";
        span.style.color = 'red';
        f.preventDefault();
    }

    if (filtre3.test(email.value) == false)
    {
        var span = document.getElementById("span5");
        span.innerHTML = "Une adresse mail comporte le caractère : @";
        span.style.color = 'red';
        f.preventDefault();
    }
});