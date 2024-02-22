var menuIcon = document.getElementById("burgerIcon");
var menu = document.getElementById("menu");


{/*JavaScript pour gérer l'affichage du menu */}
document.addEventListener("DOMContentLoaded", function() {

    menuIcon.addEventListener("click", function(e) {
        e.stopPropagation();
        toggleMenu();
    });

    document.addEventListener("click", function() {
        closeMenu();
    });

    function toggleMenu() {
        if (menu.style.display === "none" || menu.style.display === "") {
            menu.style.display = "flex";
            // Ajouter une classe pour l'effet d'apparition
            menu.classList.add("menu-appear");
        } else {
            closeMenu();
        }
    }

    function closeMenu() {
        menu.style.display = "none";
        // Retirer la classe pour l'effet d'apparition
        menu.classList.remove("menu-appear");
    }
});