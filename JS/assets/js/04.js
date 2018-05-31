/*-----------------------------------------------\
           LES OPERATEURS ARITHMETIQUES
*-----------------------------------------------*/

// ##### ~ L'ADDITION ~ ##### //

var nb1, nb2, resultat;
nb1 = 10;
nb2 = 5

// -- L'addition de nb1 et nb2 avec l'opérateur "+"
resultat = nb1 + nb2;
console.log("Addition de nb1 et nb2 = " + resultat);


// ##### ~ LA SOUSTRACTION ~ ##### //

// -- La soustraction de nb1 et nb2 avec l'opérateur "-"
resultat = nb1 - nb2;
console.log("Soustraction de nb1 et nb2 = " + resultat);


// ##### ~ LA MULTIPLICATION ~ ##### //

// -- La multiplication de nb1 et nb2 avec l'opérateur "*"
resultat = nb1 * nb2;
console.log("Multiplication de nb1 et nb2 = " + resultat);


// ##### ~ LA DIVISION ~ ##### //

// -- La division de nb1 et nb2 avec l'opérateur "/"
resultat = nb1 / nb2;
console.log("Division de nb1 et nb2 = " + resultat);


// ##### ~ LE MODULO ~ ##### //

/**
 * Le modulo correspond au reste de la division
 */
// -- Le modulo de nb1 et nb2 avec l'opérateur "%"
nb1 = 11;
resultat = nb1 % nb2;
console.log("Modulo de nb1 et nb2 = " + resultat);


/*-----------------------------------------------\
           LES ECRITURES SIMPLIFIEES
*-----------------------------------------------*/

nb1 = 15;
nb1 = nb1 + 8;
nb1 += 8; // Ce qui équivaut à écrire nb1 = nb1 + 5;
console.log("nb1 vaut maintenant " + nb1);
/**
 * Je peux procéder de la même manière pour tous les autres opérateurs
 * arithmétiques ! " + ", " - ", " * ", " / ", " % ".
 */