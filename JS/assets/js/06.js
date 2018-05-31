/*-----------------------------------------------\
                   LES FONCTIONS
*-----------------------------------------------*/

/**
 * Déclarer une fonction
 * NB : Cette fonction ne retourne aucune valeur et ne prend pas de paramètres
 */

function Bonjour() {
    /**
     * Lors de l'appel de cette fonction,
     * les instructions ci-dessous seront executées...
     */
    alert("Bonjour !");
}

/**
 * Je vais appeler ma fonction "Bonjour" et déclencher ses instructions.
 */
Bonjour();
/*    function NomDeMaFonction(Argument1, Argument2, Argument n){
 *          Les instructions...
 *    }
 */


 /**
  * Déclarer une fonction qui prend un argument (un paramètre)
  */
function ditBonjour(Prenom, Nom) {
    document.write("<p>Bonjour <strong>" + Prenom + " " + Nom + "</strong> !</p>")
}

ditBonjour("Marine", "GREGOIRE");

/*---------------------------------------------------\
EXERCICE
Créer une fonction permettant d'effectuer l'addition
de deux nombres passés en paramètres.
*---------------------------------------------------*/

function Addition(nb1, nb2) {
    return nb1 + nb2;
}

document.write("<p>" + Addition(5, 4) + "</p>");