/*-----------------------------------------------\
         INCREMENTATION & DECREMENTATION
*-----------------------------------------------*/

// ##### ~ INCREMENTATION ~ ##### //

var nb1 = 1;
nb1 = nb1 + 1;
// -- Ecriture Simplifiée
nb1++; // Raccourci de nb1 = nb1 + 1 -> Par pas de 1


// ##### ~ DECREMENTATION ~ ##### //

nb1 = nb1 - 1;
// -- Ecriture Simplifiée
nb1--; // Raccourci de nb1 = nb1 - 1 -> Par pas de 1


// ##### ~ SUBTILITE ~ ##### //

nb1 = 0;
console.log(nb1++); // ici, l'incrémentation a lieu après l'affichage, donc nb1 = 0
console.log(nb1);

nb1 = 0;
console.log(++nb1); // ici, l'incrémentation a lieu avant l'affichage, donc nb1 = 1
console.log(nb1);