/************ ********
 * Fonctions header
 ************* ******/

// Permettre l'apparition/disparition du menu format téléphone lors du clic sur le bouton du menu burger
icons.addEventListener("click", () => {
    nav.classList.toggle("active")
})


// Faire disparaitre le menu lors d'un clic ailleurs que dans le menu.
document.addEventListener("click", (event) => {
    const isClickInsideNav = nav.contains(event.target);
    
    if (!isClickInsideNav && nav.classList.contains("active")) {
        nav.classList.remove("active");
    }
});

/************ ********
 * Fonctions tirage_autonome
 ************* ******/

deck.addEventListener("click", function() {
    tirage(card1, card2, card3);
});

function tirage(firstCard, scndCard, trdCard) {
    // Premier clic sur le deck
    if (!firstCard.classList.contains('center') &&
        !firstCard.classList.contains('left')
    ) {
        console.log("Première carte tirée");
        firstCard.classList.add('center');

    //second clic sur le deck    
    } else if (firstCard.classList.contains('center')) {
        firstCard.classList.replace('center', 'left');
        scndCard.classList.add('center');
        console.log("deuxième carte tirée");

    //troisième clic
    } else if (firstCard.classList.contains('left')) {
        scndCard.classList.replace('center', 'right');
        trdCard.classList.add('center');
        console.log("troisième carte tirée")

    //quatrième clic
    } else if (trdCard.classList.contains('center')) {
        // les trois cartes ont été tirés, reboot la série ?
    }
}

//rajouter un bouton (envoyer) lié à une variable. var = 1. Quand une carte est tiré = 0 (bouton deck), tant que la valeur est à 0, aucune carte ne peut être tiré (bouton deck), cliquer sur le bouton envoyer remet la valeur à 1 (bouton envoyer)