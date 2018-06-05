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

var PremierTrimestre = [
    {
        prenom: "Julien",
        nom: "Calcerrada",
        matieres: {
            francais: 15,
            maths: 7,
            philosophie: 12,
            anglais: 13,
            latin: 5
        }
    },
    {
        prenom: "Demmy",
        nom: "Ondée",
        matieres: {
            francais: 13,
            maths: 18,
            philosophie: 10,
            ses: 15,
            sport: 17
        }
    },
    {
        prenom: "Sylvain",
        nom: "Ngo",
        matieres: {
            francais: 5,
            maths: 17,
            philosophie: 4,
            espagnol: 13,
            electrotechnique: 15,
            histgeo: 6
        }
    },
    {
        prenom: "Louis",
        nom: "II",
        matieres: {
            francais: 13,
            maths: 14,
            philosophie: 11,
            espagnol: 6,
            anglais: 8
        }
    },
    {
        prenom: "Nicolas",
        nom: "Staudre",
        matieres: {
            francais: 12,
            maths: 10,
            philosophie: 7,
            anglais: 14,
            allemand: 10
        }
    }
];

// -- 1. Afficher la liste des étudiants

w('<ol>');

var NombreDeMatiere, SommeDesNotes;

for(let i = 0 ; i < PremierTrimestre.length ; i++) {

    let Etudiant = PremierTrimestre[i];
    l(Etudiant);

    var SommeDesNotes = 0, NombreDeMatiere = 0;

    w('<li><strong>');

        w(Etudiant.prenom + ' ' + Etudiant.nom);
        w('<ul></strong>');

            // -- Afficher les matières d'un Etudiant
            for(let matiere in Etudiant.matieres) {

                l(matiere);
                w('<li>');

                    w(matiere + ' : ' + Etudiant.matieres[matiere]);

                w('</li>');

                SommeDesNotes += Etudiant.matieres[matiere];
                NombreDeMatiere++;

            } // -- Fin de la boucle matiere

            l('NombreDeMatiere : ' + NombreDeMatiere);
            l('SommeDesNotes : ' + (SommeDesNotes));



            w('<li>');
                w('<strong>Moyenne Générale : </strong>' + ( SommeDesNotes / NombreDeMatiere).toFixed(2) );
            w('</li>');

        w('</ul>');

    w('</li><br>');

}
w('</ol>');
