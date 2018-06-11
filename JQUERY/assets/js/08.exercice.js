// // -- Initialisation de jQuery (DOM READY)
$(function() {

// -- Déclaration de Variables
var CollectionDeContacts = [];

/* --------------------------------------------------------------
                    DECLARATION DES FONCTIONS
-------------------------------------------------------------- */
    
// -- Fonction ajouterContact(Contact) : Ajouter un Contact dans le tableau de Contacts, mettre à jour le tableau HTML, réinitialiser le formulaire et afficher une notification.
function ajouterContact(Contact) {

    CollectionDeContacts.push(Contact);

    $('.aucuncontact').hide();
    $(`
        <tr>
            <td>${Contact.nom}</td>
            <td>${Contact.prenom}</td>
            <td>${Contact.email}</td>
            <td>${Contact.tel}</td>
        </tr>
      `).appendTo($('#LesContacts > tbody'));   
}  

// -- Vérification de la présence d'un Contact dans Contacts
    function estCeQunContactEstPresent(unEmail) {
    // -- Booleen qui indique la présence d'un contact dans ma collection
          let estPresent = false;
  
        // -- On parcourt le tableau à la recherche d'une correspondance
        for(let i = 0 ; i < CollectionDeContacts.length ; i++) {
  
            if(unEmail === CollectionDeContacts[i].email) {
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
function validateEmail(email) {
    var re = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/;
        return re.test(String(email).toLowerCase());
}
    
// -- Vérification de la validité d'un Télephone
function validateTel(tel) {
    var telReg = new RegExp("(0|\\+33|0033)[1-9][0-9]{8}");
        return telReg.test(tel);
}
    
/* --------------------------------------------------------------
                TRAITEMENT DE MON FORMULAIRE
-------------------------------------------------------------- */
    
// -- Détection de la soumission de mon Formulaire
$('#contact').on('submit', function(e) {
    
// -- Voir le contenu de l'évènement
console.log(e);

// -- Stopper la redirection de la page
e.preventDefault();
    
// -- Récupération des champs à vérifier
    let prenom, nom, email, tel;
    nom = $('#nom');
    prenom = $('#prenom');
    email = $('#email');
    tel = $('#tel');

// -- Vérification des informations...
    let mesInformationsSontValides = true;
    
    // -- Vérification du Prénom
    if (prenom.val().length === 0) {
        // -- Le champ est incorrect, car il n'a pas été rempli
        mesInformationsSontValides = false;
      }
    
    // -- Vérification du Nom
    if (nom.val().length === 0) {
        mesInformationsSontValides = false;
      }
    
    // -- Vérification du Tel
    if (!validateTel(tel.val())) {
        mesInformationsSontValides = false;
      }
    
    // -- Vérification du Mail
    if (!validateEmail(email.val())) {
        mesInformationsSontValides = false;
      }
    
    if(mesInformationsSontValides) {
    // -- Tous est correct, Préparation du Contact
        let Contact = {
            // clé  : // valeur
            nom     : nom.val(),
            prenom  : prenom.val(),
            email   : email.val(),
            tel     : tel.val()
        };
    
    // -- Observons dans la console
    console.log(Contact);
    
// -- Vérification avec EstCeQunContactEstPresent
        if(!estCeQunContactEstPresent(Contact.email)) {
    // -- Ajout du Contact
            ajouterContact(Contact);

    // -- RéinitialisationDuFormulaire() : Après l'ajout d'un contact, on remet le formulaire à 0 !
            $('#contact')[0].reset();
    
    // -- Affichage d'une Notification
            $('.alert-contact').fadeIn().delay(4000).fadeOut();

        } else {
        // -- Alerte si contacte déjà présent
        alert("Attention ! Ce contact est déjà présent");
        }

    } else {
        // -- Alerte si erreur dans l'un des champs
        alert("Attetion ! \n Veuillez bien remplir tous les champs");

    }

});
    
}); // -- Fin de jQuery READY !