const burgerMenu = document.querySelector('.burger-menu');
const navLinks = document.querySelector('.nav-links');

// Ajoute un événement clic sur le burger menu
burgerMenu.addEventListener('click', () => {
    // Bascule l'affichage du menu : s'il est caché, il s'affiche, et inversement
    if (navLinks.style.display === "none" || navLinks.style.display === "") {
        navLinks.style.display = "flex"; // Affiche le menu
    } else {
        navLinks.style.display = "none"; // Cache le menu
    }
});