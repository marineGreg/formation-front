/*-----------------------------------------------\
                E X E R C I C E    1
*-----------------------------------------------*/

/* --
    Votre mission, que vous devez accepter !
    Réaliser une fonction permettant à un internaute de :
        - Saisir son Prénom dans un Prompt
        - Retourner à l'Utilisateur : Bonjour [PRENOM], Quel age as-tu ?
        - Saisir son Age
        - Retourner à l'Utilisateur : Tu es donc né en [ANNEE DE NAISSANCE].
        - Afficher ensuite un récapitulatif dans la page.
        Bonjour [PRENOM], tu as [AGE] ! 
-- */

function QuiEsTu() {
    var prenom = prompt("Saisis votre prénom");
    var age = prompt("Bonjour " + prenom + ", quel âge as-tu ?");
    age = parseInt(age);
    
    var today = new Date();
    var annee = today.getFullYear();

    var naissance = annee - age;
    alert ("Tu es donc née en " + naissance);

    document.write("<p> Bonjour " + prenom + ", tu as " + age + " ans ! <br>");
}

QuiEsTu();

/*-----------------------------------------------\
                C O R R E C T I O N
*-----------------------------------------------*/

// -- 1. Initialisation des Variables
var dateObject = new Date();
var currentYear = dateObject.getFullYear();

// -- 2. Création d'une Fonction
function Hello() {


    // -- 2a. Je demande à l'utilisateur son Prénom
    var name = prompt("Hello ! What's your name ?", "<Please type your name>");
    console.log(typeof name);

    // -- 2b. Je lui demande son age
    var age = parseInt(prompt("Hello " + name + " ! How old are you ?", "<Please type your age>"));
    console.log(typeof age);

    // -- 2c. Déduire l'année de naissance et l'afficher dans une alerte
    var birthYear = currentYear - age;
    alert ("AMAZING ! So you were born in " + birthYear + " !");
    // -- 2d. Afficher un récapitulatif dans la page
    document.write("Hello " + name + "! It's AMAZING ! You're " + age + " years old ! <br>");

// -- 3. Execution de la fonction

}

Hello();