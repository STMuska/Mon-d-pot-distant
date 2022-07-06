// var age = prompt("Ecrivez un âge")
// var jeune=0
// var vieux=0
// var moyen=0

// do {
//      if (age<20) {
//         jeune++
//         age = prompt("Ecrivez un âge")
//     }
//     else if(20<=age<=40) {
//         moyen ++
//         age = prompt("Ecrivez un âge")
//     }
//     else if(age>40) {
//         vieux++
//         age = prompt("Ecrivez un âge")
//     }
// }
// while (age<100)

// if (age=>100) { 
//     vieux++ 
// }
// alert("Il y a " + jeune + " personnes de moins de 20 ans, " + moyen + " personnes âgés de 20 a 40 ans et " + vieux + " personne âgés de plus de 40 ans.")

// fin exo 1

// var message=""
// var n = prompt("Entrer un chiffre")

// function TableMultiplication(n){
//     for (i=1; i<=10;i++){
//         message=message+(n + " x " +i+" = "+n*i)+"\n"
//     }
// }
// TableMultiplication(n)
// alert(message)

// fin exo 2

// var tab = ["Audrey","Aurelien", "Flavien", "Jeremy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stephane"];
// var saisie = window.prompt(`Entrez un prénom : `)
// if(tab.includes(saisie)){
//     tab.splice(tab.indexOf(saisie),1)
//     tab.push(" ")
//     alert(tab)
// }
// else{
//     alert("erreur")
//}
// fin exo 3


// var PU = Number(prompt("Saisissez le prix de votre article :"))
// var QTECOM = Number(prompt("Saisissez la quantité de vos articles :"))
// var PAP = 0
// var TOT = PU * QTECOM

// if(TOT>=100 && TOT<=200){
//     var resultat = (TOT * 5) / 100;
//     var PAP = TOT - resultat
//     alert("Le prix à payer est de : " + PAP + "€ après une remise de 5%")
//     if(PAP < 500){
//     var PORT = (PAP * 2) / 100
//     alert("Les frais de ports s'éleves à : " + PORT + "€")
//         if(PORT < 6){
//             var resultat = (PAP + 6);
//             alert("Le prix à payer avec les frais de port est de : " + resultat + "€");
//         }
//     }
// }
// else if(TOT < 100){
//     var PAP = TOT
//     if(PAP < 500){
//         var PORT = (PAP * 2) / 100;
//         alert(PORT)
//         if(PORT < 6){
//             var resultat = (PAP + 6)
//             alert("Les prix a payer avec les frais de port et sans remise est de : " + resultat + "€")
//          }
//     }
// }
// else{
//     var resultat = (TOT * 10) / 100;
//     var PAP = TOT - resultat;
//     alert("Le prix à payer sera de : " + PAP + "€ après une remise de 10%");
//     console.log("Le prix à payer sera de : " + PAP + "€ après une remise de 10%");
//     if( PAP < 500){
//         var port = ( PAP * 2) / 100;
//         var resultatfinish = PAP + port;
//         alert("Les frais de port s'élèves à : " + port + "€");
//         console.log("Les frais de port s'élèves à : " + port + "€");

//         if(port < 6){
//             var resultat = ( TOT + 6 );
//             alert(resultat)
//             alert("Le prix avec les frais de port sera de : " + resultat + "€");
//             console.log(" Le prix avce les frais de port sera de : " + resultat + "€");
//                                 }

//         alert("Le prix à payer après frais de port sera de : " + resultatfinish + "€");
//         console.log("Le prix à payer après frais de port sera de : " + resultatfinish + "€");
//                             }
//         else{
//             alert("Le prix à payer après toutes les réduction sera de : " + PAP + "€");
//         }
// }

// // fin exo 4

document.getElementById("formulaire").addEventListener("submit", Form);

function Form(e){

    var NOM = document.getElementById("nom").value
    var PRENOM = document.getElementById("prenom").value;
    var SEXE = document.getElementsByName("Sexe");
    var DATE = document.getElementById("date").value;
    var CODE = document.getElementById("code").value;
    var EMAIL = document.getElementById("email").value;
    var SUJET = document.getElementById("sujet").value;
    var QUESTION = document.getElementById("question").value;
    var ACCEPT = document.getElementById("accepter").checked;

    var n = new RegExp("^[a-zA-Z-ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÑÒÓÔÕÖŒŠÙÚÛÜÝŸàáâãäåæçèéêëìíîïñòóôõöœšùúûüýÿ]+$");
    var p = new RegExp("^[a-zA-Z-ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÑÒÓÔÕÖŒŠÙÚÛÜÝŸàáâãäåæçèéêëìíîïñòóôõöœšùúûüýÿ]+$");
    var c = new RegExp("^[0-9]{5}$");
    var mail = new RegExp("^[a-zA-Z_0-9]+@[a-z]+[.]?[a-z]{2,4}$");

    if(NOM == ""){
        var e1 = document.getElementById("Q1");
        e.preventDefault();
        e1.textContent = "Veuillez renseigner votre nom *"
    }
    else if(!n.test(NOM)){
        var e1 = document.getElementById("Q1");
         e1.textContent =" Veuillez renseigner correctement votre nom *"
        e.preventDefault();
    }
    else{
        var e1 = document.getElementById("Q1");
        
        e1.textContent = ""
    }

    if(PRENOM == ""){
        var e2 = document.getElementById("Q2");
        e.preventDefault();
        e2.textContent ="Veuillez renseigner votre prénom *"
    }
    else if(!p.test(PRENOM)){
        var e2 = document.getElementById("Q2");
        e2.textContent = "Veuillez renseigner correctement votre prénom *"
        e.preventDefault();
    }
    else{
        var e2 = document.getElementById("Q2");
        
        e2.textContent = ""
    }

    for(i=0; i < SEXE.length; i++){
        if(SEXE[i].checked == true){
            var culcul = 1
            break;
        }
    }
    if(culcul != 1){
        var e2_5 = document.getElementById("Q3");
        e.preventDefault();
        e2_5.textContent = "Veuillez séléctionner votre sexe *"
    }
    else{
        var e2_5 = document.getElementById("Q3");
        console.log("culcul")
        e2_5.textContent = "";
    }
    
    if(DATE == ""){
        var e3 = document.getElementById("Q4");
        e.preventDefault();
        e3.textContent = "Veuillez renseigner votre date de naissance *"
    }
    else{
        var e3 = document.getElementById("Q4");
        
        e3.textContent = ""
    }

    if(CODE == ""){
        var e4 = document.getElementById("Q5");
        e.preventDefault();
        e4.textContent = "Veuillez renseigner votre code postal *"
    }
    else if(!c.test(CODE)){
        var e4 = document.getElementById("Q5");
        e.preventDefault();
        e4.textContent ="Veuillez renseigner correctement votre code postal *"
    }  
    else{
        var e4 = document.getElementById("Q5");
        
        e4.textContent = ""
    }

    if(EMAIL == ""){
        var e7 = document.getElementById("Q8");
        e.preventDefault();
        e7.textContent = "Veuillez renseigner votre E-mail *"
    }
    else if(!mail.test(EMAIL)){
        var e7 = document.getElementById("Q8");
        e.preventDefault();
        e7.textContent = "Veuillez renseigner correctement votre E-mail *"
    }
    else{
        var e7 = document.getElementById("Q8");
        
        e7.textContent = ""
    }

    if(SUJET == ""){
        var e8 = document.getElementById("Q9");
        e.preventDefault();
        e8.textContent ="Veuillez séléctionner un sujet *"
}
else{
    var e8 = document.getElementById("Q9");
    e8.textContent = ""
}
    if(QUESTION == ""){
        var e9 = document.getElementById("Q10");
        e.preventDefault();
        e9.textContent = "Veuillez indiquer votre question *"
    }
    else{
        var e9 = document.getElementById("Q10")
        
        e9.textContent = ""
    }
    if(ACCEPT == ""){
        console.log("clcl")
        var e10 = document.getElementById("Q11");
        e.preventDefault();
        e10.textContent = "Veuillez cocher la case pour accepter le traitement informatique du formulaire *"
    }
    else{
        var e10 = document.getElementById("Q11");
        e10.textContent = ""
    }

    if(e1.textContent + e2.textContent + e2_5.textContent + e3.textContent + e4.textContent + e7.textContent + e8.textContent + e9.textContent + e10.textContent == ""){
    envoie = "Formulaire envoyé ! :D"
    alert(envoie);
    }

}

 