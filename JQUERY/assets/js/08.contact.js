// // -- Initialisation de jQuery (DOM READY)
$(function() {

// -- Déclaration de Variables
var CollectionDeContacts = [];
console.log(CollectionDeContacts);

/* --------------------------------------------------------------
                    DECLARATION DES FONCTIONS
-------------------------------------------------------------- */

// -- Fonction ajouterContact(Contact) : Ajouter un Contact dans le tableau de Contacts, mettre à jour le tableau HTML, réinitialiser le formulaire et afficher une notification.
@param {*} Contact

function ajouterContact(Contact) {

  CollectionDeContacts.push(Contact);
  $(`
      <tr>
          <td>` + Contact.nom + `</td>
          <td>${ Contact.prenom }</td>
          <td>${ Contact.email }</td>
          <td>${ Contact.tel }</td>
      </tr>
    `).appendTo($('#LesContacts > tbody'));

}

// -- Fonction RéinitialisationDuFormulaire() : Après l'ajout d'un contact, on remet le formulaire à 0 !
function reinitialisationDuFormulaire() {
  document.getElementById("contact").reset();
}

//         // -- Affichage d'une Notification
//         function afficheUneNotification() {}

// -- Vérification de la présence d'un Contact dans Contacts
@param {*} Contact

function estCeQunContactEstPresent(email) {
  // -- Booleen qui indique la présence d'un contact dans ma collection
        let estPresent = false;

        // -- On parcourt le tableau à la recherche d'une correspondance
        for(let i = 0 ; i < CollectionDeContacts.length ; i++) {

            if(Contact.email === CollectionDeContacts[i].email) {
                // -- Si une correspondance est trouvé "estPresent" passe à VRAI (true)
                estPresent = true;
                // -- On arrête la boucle, plus besoin de poursuivre.
                break;
            }

        }

        // -- On retourne le booleen
        return estPresent;

}

// -- Vérification de la validité d'un Email
// : https://paulund.co.uk/regular-expression-to-validate-email-address
@param {*} email

function validateEmail(email){
  var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
  return emailReg.test(email);
}

// -- Vérification de la validité d'un Télephone

@param {*} tel

  var validateTel = tel => {
  var telReg = new RegExp("(0|\\+33|0033)[1-9][0-9]{8}");
        return telReg.test(tel);
  }

/* --------------------------------------------------------------
                TRAITEMENT DE MON FORMULAIRE
-------------------------------------------------------------- */

// -- Détection de la soumission de mon Formulaire
$('#contact').on('submit', function(e) {

//             // -- Voir le contenu de l'évènement

// -- Stopper la redirection de la page
    e.preventDefault();

// -- Récupération des champs à vérifier
      const nom = $('#nom');
      const prenom = $('#prenom');
      const email = $('#email');
      const tel = $('#tel');

// -- Vérification des informations...
  let MonFormulaireEstValide = true;

// -- Vérification du Prénom
if (prenom.val().length === 0) {
  MonFormulaireEstValide = false;
}

// -- Vérification du Nom
if (nom.val().length === 0) {
  MonFormulaireEstValide = false;
}

// -- Vérification du Tel
if (!validateTel(tel.val())) {
  MonFormulaireEstValide = false;
}

// -- Vérification du Mail
if (!validateEmail(email.val())) {
  MonFormulaireEstValide = false;
}


// -- Tous est correct, Préparation du Contact
if (!MonFormulaireEstValide) {
  alert('Attention, Veuillez remplir tous les champs !')
}
  else {
    let Contact = {
                    "nom"       : nom.val(),
                    "prenom"    : prenom.val(),
                    "email"     : email.val(),
                    "tel"       : tel.val()
                };
  }

// -- Observons dans la console
console.log(Contact.nom);

// -- Vérification avec EstCeQunContactEstPresent

if (estCeQunContactEstPresent(Contact)){
  alert('Attention, ce contact existe déjà.');
  reinitialisationDuFormulaire();
}

// -- Ajout du Contact
  else {
    ajouterContact(Contact);
  }

  });

}); // -- Fin de jQuery READY !
