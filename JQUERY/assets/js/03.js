/*-------------------------------------------
    LE CHAINAGE DE METHODES AVEC JQUERY
-------------------------------------------*/

$(function() {
    console.log($('div'));

    // -- Je souhaite cacher toutes les div de ma page HTML
    //  $('div').hide('slow', function() {
       // -- alert('Fin du Hide');

       /**
        * Une fois que la méthode hide() est terminée, mon alerte peut
        * s'executer !
        * NB : La fonction s'executera pour l'ensembke des éléments du
        * sélecteur.
        */

    //  $('div').css('background', 'lightsteelblue');
    //  $('div').css('color','navy');
    //  $('div').show('slow');

    //  });

        // $('p').hide(1000).css('color','blue').css('font-size', '20px').delay(2000).show(500);
        $('p').hide(1000).css({'color':'green','font-size':'20px'}).delay(2000).show(500);
});