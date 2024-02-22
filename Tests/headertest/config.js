
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