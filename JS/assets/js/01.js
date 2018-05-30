alert('Wow ! Tu es sur ma page !');

// Deux slash pour faire un commentaire uniligne

/* 
    Ici je peux faire un commentaire sur plusieurs lignes

    RACCOURCI --> CTRL + :
*/

// -- 1 : Déclarer une variable JS
var Prenom;

// -- 2 : Affecter une valeur
Prenom = "Marine";

// -- 3 : Afficher la valeur de ma variable dans la console
console.log(Prenom);

/*-------------------------------------------------------
                LES TYPES DE VARIABLES                     
-------------------------------------------------------*/

// -- Ici typeof me permet de connaitre le type de ma variable
console.log(typeof Prenom);

// -- Déclaration et affectation d'un nombre
var Age = 30;

// -- Affichage dans la console
console.log(Age);
// -- Connaitre le type de variable
console.log(typeof Age);
console.log("je m'appelle " + Prenom + " et j'ai " + Age + " ans");

/*-------------------------------------------------------------------\
|                      LA PORTEE DES VARIABLES                       |
|                                                                    |
|    Les variables déclarées directement à la racine du fichier JS   | 
|    sont appelées variables GLOBALES.                               |
|                                                                    |
|    Elles sont disponibles dans l'ensemble de votre document, y     |
|    compris dans les fonctions.                                     |
|                                                                    |
|    Les variables déclarées à l'intérieur d'une fonction sont       |
|    appelées variables LOCALES.                                     |
|                                                                    |
|    Elles sont disponibles UNIQUEMENT dans le scope de la fonction. |
*-------------------------------------------------------------------*/

// -- Les Variables de type FLOAT
var uneDecimale = -2.984;
console.log(uneDecimale);
console.log("uneDecimale est un " + typeof uneDecimale);

// -- Les Booléens (TRUE / FALSE)
var unBooleen = false; //false
console.log(unBooleen);
console.log("unBooleen est un " + typeof unBooleen);

// -- Les Constantes

/*
 * La déclaration CONST permet de créer une constante accessible
 * uniquement en lecture. Sa valeur ne pourra pas être modifiée
 * par des réaffectations ultérieures. Une constante ne peut pas
 * être déclarée à nouveau...
 *
 * Généralement par convention, les constantes sont en majuscule.
 */

const HOST = "localhost";
const USER = "root";
const PASSWORD = "mysql";

// -- Je ne peux pas faire cela...
// USER = "Marine";
// Uncaught TypeError: Assignement to constant variable.

/*-------------------------------------------------------------------\
|                           LA MINUTE INFO                           |
|                                                                    |
|   Au fur et à mesure que l'on affecte ou ré-affecte des valeurs à  |
|   une variable, celle-ci prend la nouvelle valeur et le nouveau    |
|   type !                                                           |
|                                                                    |
|   En Javascript (ECMA Script), les variables sont auto-typées.     |
|                                                                    |
|   Pour convertir une variable de type NUMBER en STRING et STRING   |
|   en NUMBER, je peux utiliser les fonction natives de JS.          |
|                                                                    |
*-------------------------------------------------------------------*/

var unNombre = "24";
console.log(unNombre);
console.log("unNombre est un " + typeof unNombre);

/**
 * La fonction parseInt() pour retourner un Entier à partir de ma 
 * chaine de caractères.
 */
unNombre = parseInt(unNombre);
console.log("unNombre est un " + typeof unNombre);

// -- Je ré-affecte une valeur à ma variable 
unNombre = "12.55";
console.log(unNombre);
console.log("unNombre est un " + typeof unNombre);
unNombre = parseFloat(unNombre);
console.log(unNombre);
console.log("unNombre est un " + typeof unNombre);

// -- Conversion d'un Nombre en string avec toString()
unNombre = 10;
var monNombreDeTypeString = unNombre.toString();
console.log(unNombre);
console.log("unNombre est un " + typeof unNombre);
console.log(monNombreDeTypeString);
console.log("monNombreDeTypeString est un " + typeof monNombreDeTypeString);