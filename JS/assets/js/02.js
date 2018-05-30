// -- Déclarer un Tableau Indexé (2 possibilités)
var monTableau = [];
var myArray = new Array;

monTableau[0] = "Hugo";
monTableau[1] = "Demmy";
monTableau[2] = "Charlotte";

console.log(monTableau); // -- Affiche toutes les données du tableau
console.log(monTableau[1]); // -- Affiche Demmy
console.log(monTableau[2]); // -- Affiche Charlotte

var NosPrenoms = ["Sylvain", "Wahib", "Marine", "Robin", "Julien", "Nicolas"];
console.log(NosPrenoms);

// -- Déclarer et Affecter des valeurs à un Objet
var Coordonnee = {
    prenom : "Marine",
    nom : "GREGOIRE",
    age : 30
};

console.clear();
console.log(Coordonnee);
console.log(Coordonnee['prenom']);
console.log(Coordonnee.nom); // -- Parce qu'il s'agit d'un objet, on peut utiliser le "."

var AnnuaireDesApprenants = [
    
    ["Hugo", "LIEGEARD", "0783 97 15 15"],
    ["Charlotte", "MULLER", "XXXX XX XX XX"],
    { prenom: "Robin", nom: "TOURNIER", tel: "XXXX XX XX 89" },
    { prenom: "Nicolas", nom: "STAUDRE", tel: "0680 XX 18 XX" },
    
]; // -- Il est compliqué d'aller chercher les données dans un tableau pareil

// -- Exemple avec un tableau 3D

var Contacts = [
    {
        prenom: "Hugo",
        nom: "LIEGEARD",
        coordonnees: {
            email: "wf3@hl-media.fr",
            adresse: {
                ville: "Ducos",
                cp: 97224,
                region: "Martinique",
                pays: {
                    code: "FR",
                    nom: "France"
                }
            },
            tel: {
                fixe: "05 96 10 83 28",
                fax: "05 96 10 83 25",
                port: "07 83 97 15 15"
            }
        }
    },
    {
        prenom: "Marine",
        nom: "GREGOIRE",
        coordonnees: {
            email: "marinegregoire1@gmail.com",
            adresse: {
                ville: "Paris",
                cp: 75003,
                region: "Ile de France",
                pays: {
                    code: "FR",
                    nom: "France"
                }
            },
            tel: {
                fixe: "",
                fax: "",
                port: "06 72 11 76 95"
            }
        }
    },
    {
        prenom: "Robin",
        nom: "TOURNIER",
        coordonnees: {
            email: "robintournier@gmail.com",
            adresse: {
                ville: "Paris",
                cp: 75016,
                region: "Ile de France",
                pays: {
                    code: "FR",
                    nom: "France"
                }
            },
            tel: {
                fixe: "",
                fax: "",
                port: "06 25 63 xx xx"
            }
        }
    }
]

console.log(Contacts[0].coordonnees.adresse.pays.code);
console.log(Contacts[1].coordonnees.tel.port);

/*-----------------------------------------------\
               AJOUTER UN ELEMENT                                                                       
*-----------------------------------------------*/

var Couleurs = ["Rouge", "Jaune", "Vert"];
console.log(Couleurs);

/* -- Si je souhaite ajouter une couleur dans mon 
tableau je fais appel à la fonction push()*/
Couleurs.push("Orange");
Couleurs.push("Bleu","Violet");

console.log(Couleurs);

// -- NB : La fonction unshift() permet d'ajouter un ou plusieurs éléments en début de tableau


/*-----------------------------------------------\
      RECUPERER ET SORTIR LE DERNIER ELEMENT                                                                     
*-----------------------------------------------*/

/**
 * La fonction pop() me permet de supprimer un ou plusieurs éléments de mon tableau 
 * et d'en récupérer la valeur. Je peux accessoirement récupérer cette valeur dans une variable.
 */

 var monDernierElement = Couleurs.pop();
 console.log(Couleurs);
 console.log(monDernierElement);
 
 /**
  * La même chose est possible avec le premier élément en utilisant shift()
  * La fonction splice() vous permet de faire sortir un ou plusieurs éléments.
  */

  var plusieursElements = Couleurs.splice(3);
  console.log(plusieursElements);