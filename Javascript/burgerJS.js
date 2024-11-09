const burgerMenu = document.querySelector('.burger-menu');
const navLinks = document.querySelector('.nav-links');


burgerMenu.addEventListener('click', () => {

    if (navLinks.style.display === "none" || navLinks.style.display === "") {
        navLinks.style.display = "flex"; 
    } else {
        navLinks.style.display = "none"; 
    }
});