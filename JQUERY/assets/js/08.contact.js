// // -- Initialisation de jQuery (DOM READY)
$(function() {

// -- Déclaration de Variables
var CollectionDeContacts = [];
var unContact = {};
var nom = $('#nom').val();
var prenom = $('#prenom').val();
var email = $('#email').val();
var tel = $('#tel').val();

/* --------------------------------------------------------------
                    DECLARATION DES FONCTIONS
-------------------------------------------------------------- */

// -- Fonction ajouterContact(Contact) : Ajouter un Contact dans le tableau de Contacts, mettre à jour le tableau HTML, réinitialiser le formulaire et afficher une notification.

function ajouterContact(unContact) {

  CollectionDeContacts.push(unContact);
  $(`
      <tr>
          <td>` + unContact.nom + `</td>
          <td>${ unContact.prenom }</td>
          <td>${ unContact.email }</td>
          <td>${ unContact.tel }</td>
      </tr>
    `).appendTo($('#LesContacts'));

}

// -- Fonction RéinitialisationDuFormulaire() : Après l'ajout d'un contact, on remet le formulaire à 0 !
function reinitialisationDuFormulaire() {
  document.getElementById("contact").reset();
}

//         // -- Affichage d'une Notification
//         function afficheUneNotification() {}

// -- Vérification de la présence d'un Contact dans Contacts

function estCeQunContactEstPresent(unEmail) {
  // -- Booleen qui indique la présence d'un contact dans les Contacts
        let estPresent = false;

        // -- On parcourt le tableau à la recherche d'une correspondance
        for(let i = 0 ; i < CollectionDeContacts.length ; i++) {

            if(unContact.email === CollectionDeContacts[i].email) {
                // -- Si une correspondance est trouvé estPresent passe en true
                estPresent = true;
                break; // -- On arrête la boucle
            }

        }
        // -- On retourne le booleen
        return estPresent;
}

// -- Vérification de la validité d'un Email
// : https://paulund.co.uk/regular-expression-to-validate-email-address

function validateEmail(email){
  var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
  return emailReg.test(email);
}

// -- Vérification de la validité d'un Télephone

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
console.log(unContact);

// -- Vérification avec EstCeQunContactEstPresent

if (estCeQunContactEstPresent(unContact)){
  alert('Attention, ce contact existe déjà.');
  reinitialisationDuFormulaire();
}

// -- Ajout du Contact
  else {
    ajouterContact(unContact);
  }

  });

}); // -- Fin de jQuery READY !
