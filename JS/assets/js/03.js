/*-----------------------------------------------\
                LA CONCATENATION
*-----------------------------------------------*/

var DebutDePhrase = "Aujourd'hui "
var DateDuJour = new Date();
var SuiteDePhrase = ", sont présents : ";
var NombreDeStagiaire = 12;
var FinDePhrase = " apprenants.<br>";

/**
 * Nous souhaitons maintenant, grâce à la concatenation, afficher
 * tout ce petit monde en un seul morceau
 */
document.write(DebutDePhrase + DateDuJour.getDate() + "/0" + (DateDuJour.getMonth() + 1) + "/" + DateDuJour.getFullYear() + SuiteDePhrase + NombreDeStagiaire + FinDePhrase);