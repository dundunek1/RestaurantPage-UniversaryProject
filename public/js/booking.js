document.addEventListener("DOMContentLoaded", function () {
    const restaurantMap = document.getElementById("restaurant-map");
    const tables = document.querySelectorAll(".table");
    const tableInfo = document.getElementById("table-info");
    const reservationForm = document.getElementById("reservation-form");
    const bookingSuccess = document.getElementById("booking-success");
    const bookingForm = document.getElementById("booking-form");
    const checkAvailabilityBtn = document.getElementById("check-availability");

    const tableCapacity = {
        1: 4,
        2: 2,
        3: 4,
        4: 2,
        5: 6,
        6: 4,
        7: 8,
        8: 2,
        9: 4,
        10: 2,
        11: 6,
        12: 4,
        13: 2,
        14: 4,
        15: 2,
    };

    let selectedTable = null;
    let selectedDate = null;
    let selectedTime = null;

    const today = new Date();
    document.getElementById("reservation-date").valueAsDate = today;

    function handleTableClick(e) {
        const table = e.currentTarget;
        const tableId = table.getAttribute("data-table-id");

        if (table.classList.contains("unavailable")) {
            alert("Ten stolik jest niedostępny w wybranym terminie.");
            return;
        }

        if (!selectedDate || !selectedTime) {
            alert(
                "Najpierw wybierz datę i godzinę, a następnie sprawdź dostępność stolików."
            );
            return;
        }

        if (selectedTable) {
            selectedTable.classList.remove("selected");
        }

        table.classList.add("selected");
        selectedTable = table;

        document.getElementById("selected-table-number").textContent = tableId;
        document.getElementById("selected-table-capacity").textContent =
            tableCapacity[tableId] + " osób";
        document.getElementById("selected-date").textContent =
            formatDate(selectedDate);
        document.getElementById("selected-time").textContent = selectedTime;

        document.getElementById("form-table-id").value = tableId;
        document.getElementById("form-date").value = selectedDate;
        document.getElementById("form-time").value = selectedTime;
        document.getElementById("form-capacity").value = tableCapacity[tableId];
        document.getElementById("form-guests").value = tableCapacity[tableId];
        document.getElementById("form-guests").max = tableCapacity[tableId];

        tableInfo.classList.remove("d-none");
        reservationForm.classList.remove("d-none");

        reservationForm.scrollIntoView({ behavior: "smooth", block: "start" });
    }

    function formatDate(dateStr) {
        const date = new Date(dateStr);
        return date.toLocaleDateString("pl-PL", {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
        });
    }

    function checkTableAvailability() {
        const date = document.getElementById("reservation-date").value;
        const time = document.getElementById("reservation-time").value;

        if (!date || !time) {
            alert("Wybierz datę i godzinę");
            return;
        }

        selectedDate = date;
        selectedTime = time;

        console.log(
            "Sprawdzanie dostępności dla daty:",
            date,
            "i godziny:",
            time
        );

        axios
            .get(`/api/stoliki/dostepnosc?data=${date}&godzina=${time}`)
            .then((response) => {
                console.log("Otrzymana odpowiedź:", response.data);

                if (response.data.status === "success") {
                    tables.forEach((table) => {
                        table.classList.remove("selected", "unavailable");
                    });

                    const dostepnoscStolika = response.data.data.stoliki;
                    dostepnoscStolika.forEach((stolik) => {
                        const tableElement = document.querySelector(
                            `.table[data-table-id="${stolik.id}"]`
                        );
                        if (tableElement && !stolik.dostepny) {
                            tableElement.classList.add("unavailable");
                        }
                    });

                    const dateObj = new Date(date);
                    const formattedDate = dateObj.toLocaleDateString("pl-PL", {
                        weekday: "long",
                        year: "numeric",
                        month: "long",
                        day: "numeric",
                    });

                    alert(
                        `Sprawdzono dostępność na ${formattedDate}, godz. ${time}. Stoliki niedostępne są oznaczone na czerwono.`
                    );
                }
            })
            .catch((error) => {
                console.error("Błąd podczas sprawdzania dostępności:", error);
                alert(
                    "Wystąpił błąd podczas sprawdzania dostępności stolików."
                );
            });
    }

    bookingForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const guests = parseInt(document.getElementById("form-guests").value);
        const maxCapacity =
            tableCapacity[document.getElementById("form-table-id").value];

        if (guests > maxCapacity) {
            alert(
                `Liczba gości nie może przekraczać pojemności stolika (${maxCapacity} osób).`
            );
            return;
        }

        const formData = {
            imie: document.getElementById("form-name").value,
            email: document.getElementById("form-email").value,
            telefon: document.getElementById("form-phone").value,
            liczba_osob: guests,
            data: document.getElementById("form-date").value,
            godzina: document.getElementById("form-time").value,
            stolik_id: document.getElementById("form-table-id").value,
            wiadomosc: document.getElementById("form-message").value,
        };

        console.log("Wysyłanie danych rezerwacji:", formData);

        axios
            .post("/api/rezerwacje", formData)
            .then((response) => {
                console.log("Odpowiedź z serwera:", response.data);

                if (response.data.status === "success") {
                    showBookingSuccess();
                }
            })
            .catch((error) => {
                console.error("Błąd podczas rezerwacji:", error);

                let errorMessage =
                    "Wystąpił błąd podczas przetwarzania rezerwacji.";

                if (error.response && error.response.status === 422) {
                    const errorData = error.response.data.errors;
                    errorMessage = "<ul>";

                    for (const field in errorData) {
                        errorData[field].forEach((message) => {
                            errorMessage += `<li>${message}</li>`;
                        });
                    }

                    errorMessage += "</ul>";
                }

                alert(errorMessage);
            });
    });

    function showBookingSuccess() {
        tableInfo.classList.add("d-none");
        reservationForm.classList.add("d-none");
        bookingSuccess.classList.remove("d-none");

        if (selectedTable) {
            selectedTable.classList.remove("selected");
            selectedTable.classList.add("unavailable");
            selectedTable = null;
        }

        bookingSuccess.scrollIntoView({ behavior: "smooth", block: "start" });
    }

    checkAvailabilityBtn.addEventListener("click", checkTableAvailability);

    tables.forEach((table) => {
        table.addEventListener("click", handleTableClick);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const restaurantMap = document.getElementById("restaurant-map");
    const tables = document.querySelectorAll(".table");

    function initializeResponsiveMap() {
        const mapContent = document.createElement("div");
        mapContent.className = "map-content";

        while (restaurantMap.firstChild) {
            mapContent.appendChild(restaurantMap.firstChild);
        }

        restaurantMap.appendChild(mapContent);

        const scrollIndicator = document.createElement("div");
        scrollIndicator.className = "scroll-indicator";
        scrollIndicator.textContent = "Przewiń, aby zobaczyć całą mapę";
        restaurantMap.appendChild(scrollIndicator);

        updateScrollIndicator();
    }

    function updateScrollIndicator() {
        const scrollIndicator = document.querySelector(".scroll-indicator");
        if (!scrollIndicator) return;

        if (window.innerWidth < 850) {
            scrollIndicator.style.display = "block";

            setTimeout(() => {
                scrollIndicator.style.opacity = "0";
                scrollIndicator.style.transition = "opacity 1s";
            }, 5000);
        } else {
            scrollIndicator.style.display = "none";
        }
    }

    function setupTouchScrolling() {
        const mapContent = document.querySelector(".map-content");
        if (!mapContent) return;

        let isScrolling = false;
        let startX, startY, scrollLeft, scrollTop;

        restaurantMap.addEventListener(
            "touchstart",
            function (e) {
                if (e.touches.length === 1) {
                    isScrolling = true;
                    startX = e.touches[0].pageX - restaurantMap.offsetLeft;
                    startY = e.touches[0].pageY - restaurantMap.offsetTop;
                    scrollLeft = restaurantMap.scrollLeft;
                    scrollTop = restaurantMap.scrollTop;
                }
            },
            { passive: true }
        );

        restaurantMap.addEventListener(
            "touchmove",
            function (e) {
                if (!isScrolling) return;

                const x = e.touches[0].pageX - restaurantMap.offsetLeft;
                const y = e.touches[0].pageY - restaurantMap.offsetTop;
                const walkX = (x - startX) * -1;
                const walkY = (y - startY) * -1;

                restaurantMap.scrollLeft = scrollLeft + walkX;
                restaurantMap.scrollTop = scrollTop + walkY;
            },
            { passive: true }
        );

        restaurantMap.addEventListener("touchend", function () {
            isScrolling = false;
        });
    }

    function adjustMapScaleForMobileDevices() {
        const mapContent = document.querySelector(".map-content");
        if (!mapContent) return;

        if (window.innerWidth <= 576) {
            const scale = Math.max(0.7, window.innerWidth / 900);
            mapContent.style.transform = `scale(${scale})`;

            restaurantMap.style.height = 600 * scale + "px";
        } else {
            mapContent.style.transform = "none";
            restaurantMap.style.height = "";
        }
    }

    initializeResponsiveMap();
    setupTouchScrolling();
    adjustMapScaleForMobileDevices();

    window.addEventListener("resize", function () {
        updateScrollIndicator();
        adjustMapScaleForMobileDevices();
    });

    tables.forEach((table) => {
        table.addEventListener("click", function () {
            if (table.classList.contains("unavailable")) {
                return;
            }

            tables.forEach((t) => t.classList.remove("selected"));

            table.classList.add("selected");

            const tableId = table.getAttribute("data-table-id");
            const tableInfo = table.innerText.split("\n")[1].split(" ")[0];

            const reservationForm = document.getElementById("reservation-form");
            if (reservationForm) {
                const tableIdField = document.getElementById("form-table-id");
                const capacityField = document.getElementById("form-capacity");

                if (tableIdField) tableIdField.value = tableId;
                if (capacityField) capacityField.value = tableInfo;

                const tableInfoDiv = document.getElementById("table-info");
                if (tableInfoDiv) {
                    tableInfoDiv.classList.remove("d-none");

                    const selectedTableNumber = document.getElementById(
                        "selected-table-number"
                    );
                    const selectedTableCapacity = document.getElementById(
                        "selected-table-capacity"
                    );

                    if (selectedTableNumber)
                        selectedTableNumber.textContent = tableId;
                    if (selectedTableCapacity)
                        selectedTableCapacity.textContent = tableInfo;

                    reservationForm.classList.remove("d-none");

                    setTimeout(() => {
                        reservationForm.scrollIntoView({
                            behavior: "smooth",
                            block: "start",
                        });
                    }, 300);
                }
            }
        });
    });
});
