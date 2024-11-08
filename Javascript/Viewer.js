document.addEventListener("DOMContentLoaded", function() {
    const viewerContainer = document.getElementById('viewer');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    let currentImageIndex = 0;
    let images = [];

    // Fonction pour charger le fichier XML
    function loadXMLFile() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "IMGViewer/IMGViewer.xml", true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                const xmlDoc = xhr.responseXML;
                loadImages(xmlDoc);
                displayImage(currentImageIndex);
            } else {
                console.error("Erreur lors du chargement du fichier XML");
            }
        };
        xhr.send();
    }

    // Fonction pour charger les images dans un tableau
    function loadImages(xmlDoc) {
        const imageElements = xmlDoc.getElementsByTagName("image");
        for (let i = 0; i < imageElements.length; i++) {
            const src = imageElements[i].getElementsByTagName("src")[0].textContent;
            const alt = imageElements[i].getElementsByTagName("alt")[0].textContent;
            images.push({ src, alt });
        }
    }

    // Fonction pour afficher une image en fonction de l'index
    function displayImage(index) {
        viewerContainer.innerHTML = ''; // Vide le conteneur
        const imgElement = document.createElement("img");
        imgElement.src = images[index].src;
        imgElement.alt = images[index].alt;
        imgElement.classList.add("carousel-img");
        viewerContainer.appendChild(imgElement);
    }

    // Événements pour les boutons de navigation
    prevButton.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        displayImage(currentImageIndex);
    });

    nextButton.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        displayImage(currentImageIndex);
    });

    // Charger les images au démarrage
    loadXMLFile();
});
