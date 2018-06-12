/*

OBJECTIF : A partir d'une liste de contacts, être en mesure de récupérer un contact et d'afficher le détail de ses informations.

CONSIGNE :

	// Un internaute doit pouvoir rechercher un contact sur la base de son Username, Email, Phone ou Name
	// Le résultat des membres correspondant s'affiche ensuite dans une liste en dessous du champ de recherche.

    ETAPE 1. Mettre en Place le HTML et le CSS nécessaire pour rechercher un contact.
        Ex. Un champ input-text, et/ou un bouton pour lancer la recherche.
        
    ETAPE 2. Récupérer le Flux JSON : https://jsonplaceholder.typicode.com/users et être en mesure de récupérer la fiche d'un utilisateur par rapport a son username ou son email, ou son téléphone ou son Name. 
	
	BONUS : Trouver une solution grâce au Regex permettant de rechercher tous les utilisateurs correspondant.
    
    ETAPE 3. Afficher en HTML et CSS uniquement les informations de base : Nom, Prénom, Email, Téléphone.
    
    
*/
    // -- 1.Initialisation de jQuery
$(function() {


    $('#search').on('change', function() {

    // -- 2. Je récupère la valeur saisie par mon utilisateur
        let search  = $(this).val();
        // console.log($(this));
        console.log(search);



    // -- 3. Récupérer la liste de Contacts depuis le flux JSON

        $.getJSON('https://jsonplaceholder.typicode.com/users', function(contacts) {  

    // -- 4. Parcourir les contacts
            for(let i = 0 ; i < contacts.length ; i++) {

        // -- 5. Je récupère mon contact en cours dans la boucle
            let contact = contacts[i];
            console.log(contact);

            // -- 6. Je souhaite vérifier si la variable search correspond à l'une des valeurs des propriétés (username, email, phone, name) de l'objet contacts
                if(contact.username === search || contact.name === search || contact.email === search || contact.phone === search) {

                    $(`
                        <div class="membre">
                            <div class="membre_informations">
                                <p>Nom Complet : ${contact.name} </p>
                                <p>Username : ${contact.username} </p>
                                <p>Email : ${contact.email} </p>
                                <p>Téléphone : ${contact.phone} </p>
                            </div>
                        </div>
                    `).appendTo('.resultat');

                } // end if
                    
                
            } // end for

        }); // -- fin getJSON

    }); // fin function on change

}); // -- fin jQuery