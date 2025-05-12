document.addEventListener("DOMContentLoaded", function () {
    const tableMap1 = document.getElementById("tableMap1");
    const tableMap2 = document.getElementById("tableMap2");
    const guestsInput = document.getElementById("guests");
    const selectedTableInput = document.getElementById("selectedTable");
    const tableError = document.getElementById("tableError");

    let selectedTable = null;

    //Rozkład: [ilość miejsc, liczba stolików, piętro]
    const tableConfig = [
        [1, 2, 1],
        [1, 1, 2],
        [2, 5, 1],
        [2, 5, 2],
        [3, 2, 1],
        [3, 2, 2],
        [4, 4, 1],
        [4, 4, 2],
        [6, 2, 1],
        [6, 1, 2],
        [8, 1, 1],
        [8, 1, 2],
    ];

    let tableIndex = 1;
    const tables = [];

    tableConfig.forEach(([seats, count, floor]) => {
        for (let i = 0; i < count; i++) {
            tables.push({
                id: `T${tableIndex}`,
                seats,
                floor,
            });
            tableIndex++;
        }
    });

    function renderTables() {
        tableMap1.innerHTML = "";
        tableMap2.innerHTML = "";
        const guestCount = parseInt(guestsInput.value) || 0;

        tables.forEach((table) => {
            const div = document.createElement("div");
            div.className = "table-box";
            div.dataset.seats = table.seats;
            div.dataset.id = table.id;
            div.innerHTML = `${table.id}<br><small>${table.seats} os.</small>`;

            if (guestCount > 0 && table.seats >= guestCount) {
                div.classList.add("border-success");
            } else if (guestCount > 0) {
                div.classList.add("opacity-50");
            }

            div.addEventListener("click", function () {
                if (!guestCount) {
                    alert("Podaj najpierw liczbę osób.");
                    return;
                }

                if (guestCount > table.seats) {
                    tableError.classList.remove("d-none");
                    return;
                }

                tableError.classList.add("d-none");

                document
                    .querySelectorAll(".table-box")
                    .forEach((t) => t.classList.remove("selected"));
                div.classList.add("selected");

                selectedTable = table.id;
                selectedTableInput.value = `${table.id} (${table.seats} os., piętro ${table.floor})`;
            });

            const map = table.floor === 1 ? tableMap1 : tableMap2;
            map.appendChild(div);
        });
    }

    guestsInput.addEventListener("input", function () {
        selectedTable = null;
        selectedTableInput.value = "";
        renderTables();
    });

    document
        .getElementById("reservationForm")
        .addEventListener("submit", function (e) {
            e.preventDefault();

            if (!selectedTable) {
                alert("Wybierz stolik przed wysłaniem formularza.");
                return;
            }

            alert("Rezerwacja zapisana!\nStolik: " + selectedTableInput.value);
            this.reset();
            selectedTable = null;
            selectedTableInput.value = "";
            renderTables();
        });

    renderTables();
});
