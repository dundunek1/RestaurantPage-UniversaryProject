// Funkcja do przełączania widoczności szczegółów dania
function toggleDetails(detailsId) {
    const detailsElement = document.getElementById(detailsId);
        if (detailsElement) {
            detailsElement.classList.toggle("active");
        }
    }

// Aktywacja zakładek w nawigacji menu
document.addEventListener("DOMContentLoaded", function () {
    const menuTabs = document.querySelectorAll("#menuTabs .nav-link");

    menuTabs.forEach((tab) => {
        tab.addEventListener("click", function (e) {e.preventDefault();

        // Usunięcie klasy active z wszystkich zakładek
        menuTabs.forEach((t) => t.classList.remove("active"));

        // Dodanie klasy active do klikniętej zakładki
        this.classList.add("active");

        // Przewinięcie do odpowiedniej sekcji
            const targetId = this.getAttribute("href");
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 100,
                    behavior: "smooth",
                 });
            }
        });
    });

    // Filtry menu
    const filterButtons = document.querySelectorAll(".filter-btn");
    const menuItems = document.querySelectorAll(".menu-item");

    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const filter = this.getAttribute("data-filter");

            // Usunięcie klasy active z wszystkich przycisków
            filterButtons.forEach((btn) => btn.classList.remove("btn-secondary"));
            filterButtons.forEach((btn) => btn.classList.add("btn-outline-secondary") );

            // Dodanie klasy active do klikniętego przycisku
            this.classList.remove("btn-outline-secondary");
            this.classList.add("btn-secondary");

            // Filtrowanie pozycji menu
            menuItems.forEach((item) => {
                if (filter === "all") {
                    item.style.display = "flex";
                } 

                else {
                    const categories = item.getAttribute("data-categories");

                    if (categories && categories.includes(filter)) {
                        item.style.display = "flex";
                    } 
                    
                    else {
                        item.style.display = "none";
                    }
                }
            });
        });
    });
});