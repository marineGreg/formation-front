$('#MonFormulaire').submit(function(e){
    // -- Stopper la redirection du submit
    e.preventDefault();

    // -- Cacher le formulaire, puis initier après ce formulaire un <p> contenant un message de bienvenue et la valeur entrée dans le champ input id nomcomplet

    $('#MonFormulaire').hide().after("<p>Bonjour <strong>" + $('#nomcomplet').val() + " </strong>!</p>");
});
