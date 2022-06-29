var nom = prompt("Entrez votre nom")
var prenom = prompt("Entrez votre prenom")

if(confirm("Etes vous un homme ?"))
{
        alert("Bonjour Monsieur" + " " + nom + " " + prenom + " " +
    "Bienvenue sur notre site web !")
}
    else {
        alert("Bonjour Madame" + " " + nom + " " + prenom + " " +
        "Bienvenue sur notre site web !")
    }