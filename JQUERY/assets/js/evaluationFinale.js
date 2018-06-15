// -- Initialisation de jQuery (DOM READY)
$(function() {

    // -- Détection de la soumission de mon Formulaire
    $('#formulaire').on('submit', function(e) {
        
        // -- Stopper la redirection de la page
        e.preventDefault();
        console.log(e);

        $('#formulaire .is-invalid').removeClass('is-invalid');
        $('#formulaire .alert-danger').remove();

        // -- Récupération des champs à vérifier
        let chat = $('#chat').val();
        let message = $('#message').val();
        console.log(chat + " " + message);

        if (chat === "") {
            console.log("Vous n'avez pas choisi de chat !");
            $('#chat').appendTo(`
                        <div class="alert alert-success" role="alert">
                        Vous devez sélectionner un chat !
                        </div>
                    `);
        } else {
            
            $(this).replaceWith(`
            <div class="alert alert-success" role="alert">
                <p>Vous venez de craquer sur l'un de nos chats !</p>
                <p>Vous avez choisi le petit ${chat} pour les raisons suivantes : <br>
                    ${message}
                </p>
                <p>Nous reviendrons vers vous dans les plus brefs délais et par la force du saint esprit puisque nous n'avons pas pris vos coordonnées dans ce formulaire. 
                Bonne journée !
                </p>
            </div>
                    `);

        }


    }); //- fin de soumission du formulaire

}); // -- fin de jQuery