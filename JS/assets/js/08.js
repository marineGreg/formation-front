/*-----------------------------------------------\
                LES CONDITIONS
*-----------------------------------------------*/
                                                                                        
var majoriteLegaleFr = 18;

if(14 >= majoriteLegaleFr) {
    alert("Bienvenue !");
}
// -- LE ELSE N'EST PAS OBLIGATOIRE
else {
    alert("Va voir chez Google si...");
}


/*---------------------------------------\
                EXERCICE
*---------------------------------------*/
/**
 * Créer une fonction permettant de vérifier l'âge d'un visiteur (prompt).
 * S'il à la majorité légale, alors je lui souhaite la bienvenue, sinon 
 * je fais une redirection sur Google...
 */
                                                                                        
 var majoriteLegaleFr = 18;
 var age = parseInt(prompt("Saisis ton âge"));

 function enterSite() {
    if (age >= majoriteLegaleFr){
        alert("Bienvenue !");
    }
    else {
        document.location.href="http://www.google.fr";
    }
 }

enterSite();

/*---------------------------------\
        C O R R E C T I O N
*---------------------------------*/
                                                                                        
// -- 1. Déclarer la majorité 
var majoriteLegaleFr = 18;

// -- 2. Vérifier si l'utilisateur est majeur
function monUtilisateurEstMajeur(age) {
    if (age >= majoriteLegaleFr) {
        return true;
    } else {
        return false;
    }
}

// -- 3. Demander à l'utilisateur son âge
var age = parseInt(prompt("Bonjour, quel âge avez-vous ?", "Saisissez votre âge"));

// -- 4. Vérifier l'âge de l'utilisateur
if (monUtilisateurEstMajeur(age)) { // on aurait pu mettre la condition == true mais ici, cela vérifie déjà si c'est booléen.
    alert("Bienvenue sur mon site internet, reservé pour les majeurs...");
    document.write("0_0 !!!");
} else {
// -- 5. Rediriger l'utilisateur si la condition n'est pas vérifiée
    document.location.href="http://lmgtfy.com/?q=majorit%C3%A9+l%C3%A9gale+en+france";
}


/*-------------------------------------------------------------------\
|                   LES OPERATEURS DE COMPARAISON                    |
|                                                                    |
|   L'opérateur de comparaison " == " signifie : égal à              |
|   Il permet de vérifier que 2 variables sont identiques.           |
|                                                                    |
| L'opérateur de comparaison " === " siginifie : Strictement égal à  |
|    --> Il va comparer la valeur mais aussi le type.                |
|                                                                    |
|           L'opérateur " != " signifie : Différent de               |
|                                                                    |
|     L'opérateur " !== " signifie : Strictement différent de        |
|                                                                    |
*-------------------------------------------------------------------*/

/* --------------------------------------------
            EXERCICE :
J'arrive sur un Espace Sécurisé au moyen d'un email et d'un mot de passe.

Je dois saisir mon email et mon mot de passe afin d'être authentifié sur le site.

En cas d'échec une alert m'informe du problème.
Si tous se passe bien, un message de bienvenue m'accueil.
----------------------------------------------- */

// // -- BASE DE DONNEES

var email, mdp;

email = "wf3@hl-media.fr";
mdp = "wf3";

// 1. Demander l'email
var adresseMail = prompt("Saississez votre adresse email", "machin@trucmail.com");

// 2. Demander le mot de passe
var password = prompt("Saisissez votre mot de passe", "********");

// 3. Vérifier par une fonction si la condition est true ou false
function identificationReussie(adresseMail, password) {
    if ((adresseMail === email) && (password === mdp)){
        return true;
    } else {
        return false;
    }
}
// 4. Si la condition est remplie ( == true)
if (identificationReussie(adresseMail, password)) {
    alert ("Bienvenue sur le site");
    document.write("<h1>Bienvenue !!!</h1>");
} else {
    alert ("email ou Mot de Passe incorrect");
}

    /* -------------------------------------------------------- *\
   /                 ~ LES OPERATEURS LOGIQUES ~                  \
  /_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ \
    |                                                           |
    |           ##### L'opérateur ET : && ou AND #####          |
    |                                                           |
    |   Si la combinaison email user et email correspond, ET    |
    |   la combinaison mdpuser et mdp correspond.                |
    |                                                           |
    |   --> Dans cette condition, les 2 doivent OBLIGATOIREMENT |
    |   correspondre pour être validée.                        |
    |   Ex. if(emailUser == email && mdpUser == mdp) {...}      |
    |                                                           |
    |           ##### L'opérateur OU : || ou OR #####           |
    |                                                           |
    |   Si la combinaison emailUser et email correspond ET/OU   |
    |   la combinaison mdpUser et mdp correspond.
    |                                                           |
    |   --> Dans cette condition, au moins l'une des deux       |
    |   doit correspondre pour être validée.                    |
    |   Ex. if(emailUser == email || mdpUser == mdp) {...}      |
    |                                                           |
    |        ##### L'opérateur " ! " ou encore NOT #####        |
    |                                                           |
    |   L'Opérateur "!" signifique le CONTRAIRE DE... ou NOT    |
    |                                                           |
    |   var monUtilisateurEstApprouve = true;                   |
    |   if(!monUtilisateurEstAppprouve) {...}                   |
    |   Mon Utilisateur n'est pas approuvé.                     |
    |                                                           |
    |   Reviens à écrire :                                      |
    |   if(monUtilisateurEstApprouve == false) {...}            |
    |                                                           |
    \*---------------------------------------------------------*/