/*---------------------------------------
    LES SELECTEURS D'ENFANTS jQUERY
----------------------------------------*/

$(function() {

    l = e => console.log(e);

    // -- Je souhaite sélectionner toutes les div de ma page
    l($('div'));

    // -- Je souhaite sélectionner la balise nav de ma page
    l($('nav'));

    
    // -- Je souhaite tous les éléments descendants directs (enfants) qui sont dans la nav
    l($('#menu').children());
    
    // -- Parmis ces descendants je veux uniquement l'élément "ul"
    l($('#menu').children('ul'));

    // -- Je souhaite récupérer tous les éléments "li" de mon "ul"
    l($('#menu').children('ul').find('li'));

    // -- Je souhaite récupérer uniquement le 2ème éléments de mes "li"
    l($('#menu').find('li').eq(1));

    // -- Je souhaite connaitre le voisin immédiat de mon "menu"
    l($('#menu').next());
    l($('#menu').next().next()); // le voisin du voisin
    l($('#menu').prev()); // Le voisin précédent

    // -- LES PARENTS
    l($('#menu').parent());

});