/*-----------------------------------------------\
                   LES BOUCLES
*-----------------------------------------------*/

// Pour i = 0 ; Tant que i est strictement inférieur ou égale à 10 ; alors i est incrémentée de 1
for (i = 0; i <= 10; i++) {
    document.write("<p> Instruction executée : <strong>" + i + "</strong></p>");
}

document.write("<hr>");

var j = 2;
while (j <= 10) {
    document.write("<p> Instruction executée : <strong>" + j + "</strong></p>");

    // ATTENTION A NE PAS OUBLIER L'INCREMENTATION !
    j++;
}

document.write("<hr>");

/*--------------------------------------------\
                   EXERCICE
*--------------------------------------------*/

var Prenoms = ["Jean", "Marc", "Matthieu", "Luc", "Pierre", "Paul", "Hugo", "Jacques"];

/**
 * Grâce à une boucle FOR, affichez la liste des prénoms du
 * tableau ci-dessus dans la console, ou sur votre page.
 */

 // -- Avec la boucle FOR
for (let i = 0; i < 8; i++) {
    console.log(Prenoms[i]);
 }

for (let i = 0; i < Prenoms.length; i++) {
    document.write(Prenoms[i] + "<br>");
}

console.log(" ----- ");

// -- Avec la boucle WHILE
var j = 0;
while (j < Prenoms.length) {
    console.log(Prenoms[j]);
    j++;
}

console.log(" ----- ");

// -- Avec la boucle FOR EACH
// -- ATTENTION A LA PERFORMANCE !!!
Prenoms.forEach(afficheUnPrenom);
function afficheUnPrenom(valeur, i){
    console.log(i + " " + valeur);
}