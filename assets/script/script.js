document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("projectModal");

// Ottieni tutti i div con la classe "progetto-card"
    var progettoCards = document.querySelectorAll(".progetto-card");

    progettoCards.forEach(card => {
        const performance = card.getAttribute('data-performance');
        const performanceClass = getPerformanceClass(parseInt(performance));
        const performanceElement = card.querySelector('.performance');
        performanceElement.classList.add(performanceClass);
    });


// Ottieni il contenuto della modal
    var modalImg = document.getElementById("modal-img");
    var modalName = document.getElementById("modal-name");
    var modalPerformance = document.getElementById("modal-performance");

// Aggiungi un evento click per ogni progetto-card
    progettoCards.forEach(function (card) {
        card.addEventListener("click", function () {
            // Ottieni i dati dal div
            var imgSrc = card.getAttribute("data-img");
            var name = card.getAttribute("data-name");
            var performance = card.getAttribute("data-performance");

            // Aggiorna i contenuti della modal
            modalImg.src = imgSrc;
            modalName.textContent = name;
            modalPerformance.textContent = "Performance: " + performance + "%";

            // Mostra la modal
            modal.style.display = "block";
        });
    });

// Funzione per chiudere la modal
    var closeModal = document.querySelector(".close");
    closeModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

// Chiudi la modal se l'utente clicca fuori dalla finestra modale
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
});


function getPerformanceClass(performance) {
    if (performance < 33) return 'red';
    if (performance >= 33 && performance <= 66) return 'yellow';
    return 'green';
}