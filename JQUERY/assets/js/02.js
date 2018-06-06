/*---------------------------
    LES SELECTEURS jQUERY
----------------------------*/

// -- Format : $('selecteur');
// -- En jQuery, tous les selecteurs CSS sont disponibles...

$(function() {
    // -- DOM READY !
    l = e => console.log(e);

    // -- Sélectionner toutes les balises SPAN !
        // -- en JS
        l(document.getElementsByTagName('span'));
        // -- en JQ
        l($('span'));

    // Je veux sélectionner mon Menu grâce à son ID
        // -- en JS
        l(document.getElementById('menu'));
        // -- en JQ
        l($('#menu'));  
    
    // Je veux sélectionner une classe
        // -- en JS
        l(document.getElementsByClassName('maClasse'));
        // -- en JQ
        l($('.maClasse'));

    // Je veux sélectionner un Attribut

        l($('[href="https://www.google.fr"]'));  
})