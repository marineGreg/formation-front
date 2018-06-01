/*
 I. Créer un Tableau 3D "PremierTrimestre" contenant la moyenne d'un étudiant pour plusieurs matières.

    Nous auront donc pour un étudiant, sa moyenne à plusieurs matières.
    
    Par exemple : Hugo LIEGEARD : [ Francais : 12, Math : 19, Physique 4], ... etc
    
    **** Vous allez créez au minimum 5 étudiants ****

II. Afficher sur la page (à l'aide de document.write) pour chaque étudiant, la liste (ul et li) 
de sa moyenne à chaque matière, puis sa moyenne générale. 
*/

// -- Les Flemards.js
function l(e) {
    console.log(e);
}
function w(e) {
    document.write(e);
}

// I. 
var premierTrimestre = [
    {
        prenom: "Hugo",
        nom: "LIEGEARD",
        moyennes: { français: 12, maths: 19, physique: 4, svt: 11, gaming : 20 }
    },
    {
        prenom: "Marine",
        nom: "GREGOIRE",
        moyennes: { français: 9, maths: 7, physique: 14, svt: 15, anglais: 18, philosophie: 6 }
    },
    {
        prenom: "Sylvain",
        nom: "NGO",
        moyennes: { français: 5, maths: 17, philosophie: 4, espagnol: 13, electrotechnique: 15, histgeo: 6 }
    },
    {
        prenom: "Louis",
        nom: "II",
        moyennes: { francais: 12, maths: 14, philosophie: 13, histoire: 17, anglais: 8 }
    },
    {
        prenom: "Pierre",
        nom: "STAUDRE",
        moyennes: { francais: 12, maths: 10, philosophie: 7, anglais: 14, allemand: 10 }
    }
]
var i = 0;

function test() {
    if (premierTrimestre[i].moyennes == undefined) {
       return 'Undefined value!';
    }
    return premierTrimestre[i].moyennes;
  }

l(premierTrimestre[i].moyennes);

for (i = 0; i < premierTrimestre.length; i++) {
    w(premierTrimestre[i].nom + " " + premierTrimestre[i].prenom + " <br> <ul> <li>" + premierTrimestre[i].moyennes + " </li> </ul>");
}
