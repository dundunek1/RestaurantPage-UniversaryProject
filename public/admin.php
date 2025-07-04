<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Panel administracyjny - Restauracja Podkarpackie Przysmaki</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="styles.css" rel="stylesheet"/>
    </head>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="home.html"
                    >Podkarpackie Przysmaki</a
                >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.html"
                                >Strona główna</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.html"
                                >Rezerwacja</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin.html"
                                >Panel admina</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <h1 class="text-center mb-4">Panel Administracyjny</h1>

            <div class="row mb-4" id="stats-container">
                <div class="col-md-3 mb-3">
                    <div class="card bg-primary text-white dashboard-card">
                        <div class="card-body">
                            <h5 class="card-title">Wszystkie rezerwacje</h5>
                            <p
                                class="card-text display-6"
                                id="total-reservations"
                            >
                                0
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-warning text-dark dashboard-card">
                        <div class="card-body">
                            <h5 class="card-title">Oczekujące</h5>
                            <p
                                class="card-text display-6"
                                id="pending-reservations"
                            >
                                0
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-success text-white dashboard-card">
                        <div class="card-body">
                            <h5 class="card-title">Potwierdzone</h5>
                            <p
                                class="card-text display-6"
                                id="confirmed-reservations"
                            >
                                0
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-danger text-white dashboard-card">
                        <div class="card-body">
                            <h5 class="card-title">Anulowane</h5>
                            <p
                                class="card-text display-6"
                                id="cancelled-reservations"
                            >
                                0
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <h3 class="mb-0">Akcje</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <button
                                    id="refresh-btn"
                                    class="btn btn-primary me-2"
                                >
                                    <i class="bi bi-arrow-clockwise"></i>
                                    Odśwież dane
                                </button>
                                <button
                                    id="add-test-btn"
                                    class="btn btn-success me-2"
                                >
                                    <i class="bi bi-plus-circle"></i> Dodaj
                                    testową rezerwację
                                </button>
                                <button
                                    id="clear-btn"
                                    class="btn btn-danger me-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#clearModal"
                                >
                                    <i class="bi bi-trash"></i> Wyczyść
                                    rezerwacje
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Lista Rezerwacji</h3>
                </div>
                <div class="card-body">
                    <div id="rezerwacje-container">
                        <div class="text-center">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden"
                                    >Ładowanie...</span
                                >
                            </div>
                            <p>Ładowanie rezerwacji...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="clearModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title">Potwierdzenie</h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Czy na pewno chcesz usunąć wszystkie rezerwacje?
                                Tej operacji nie można cofnąć.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Anuluj
                            </button>
                            <button
                                type="button"
                                class="btn btn-danger"
                                id="confirm-clear-btn"
                            >
                                Usuń wszystkie
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="statusModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title">Zmień status rezerwacji</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form id="status-form">
                            <input type="hidden" id="reservation-id" />
                            <div class="mb-3">
                                <label class="form-label">Nowy status:</label>
                                <select
                                    class="form-select"
                                    id="reservation-status"
                                >
                                    <option value="oczekujaca">
                                        Oczekująca
                                    </option>
                                    <option value="potwierdzona">
                                        Potwierdzona
                                    </option>
                                    <option value="anulowana">Anulowana</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Anuluj
                        </button>
                        <button
                            type="button"
                            class="btn btn-primary"
                            id="confirm-status-btn"
                        >
                            Zapisz
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-dark text-white text-center py-3 mt-5">
            <div class="container">
                <p class="mb-0">
                    &copy; 2025 Podkarpackie Przysmaki. Panel administracyjny.
                </p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const rezerwacjeContainer = document.getElementById(
                    "rezerwacje-container"
                );
                const refreshBtn = document.getElementById("refresh-btn");
                const addTestBtn = document.getElementById("add-test-btn");
                const confirmClearBtn =
                    document.getElementById("confirm-clear-btn");
                const confirmStatusBtn =
                    document.getElementById("confirm-status-btn");

                const statusModal = new bootstrap.Modal(
                    document.getElementById("statusModal")
                );
                const reservationIdInput =
                    document.getElementById("reservation-id");
                const reservationStatusSelect =
                    document.getElementById("reservation-status");

                const totalReservationsEl =
                    document.getElementById("total-reservations");
                const pendingReservationsEl = document.getElementById(
                    "pending-reservations"
                );
                const confirmedReservationsEl = document.getElementById(
                    "confirmed-reservations"
                );
                const cancelledReservationsEl = document.getElementById(
                    "cancelled-reservations"
                );

                function loadStats() {
                    axios
                        .get("/api/admin/stats")
                        .then((response) => {
                            if (response.data.status === "success") {
                                const stats = response.data.data;
                                totalReservationsEl.textContent =
                                    stats.total_reservations;
                                pendingReservationsEl.textContent =
                                    stats.pending_reservations;
                                confirmedReservationsEl.textContent =
                                    stats.confirmed_reservations;
                                cancelledReservationsEl.textContent =
                                    stats.cancelled_reservations;
                            }
                        })
                        .catch((error) => {
                            console.error(
                                "Błąd podczas pobierania statystyk:",
                                error
                            );
                        });
                }

                function loadRezerwacje() {
                    rezerwacjeContainer.innerHTML = `
                    <div class="text-center">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Ładowanie...</span>
                        </div>
                        <p>Ładowanie rezerwacji...</p>
                    </div>
                `;

                    axios
                        .get("/api/admin/rezerwacje")
                        .then((response) => {
                            if (response.data.status === "success") {
                                displayRezerwacje(response.data.data);
                            } else {
                                rezerwacjeContainer.innerHTML = `
                                <div class="alert alert-danger">
                                    Wystąpił błąd podczas pobierania rezerwacji.
                                </div>
                            `;
                            }
                        })
                        .catch((error) => {
                            console.error("Błąd:", error);
                            rezerwacjeContainer.innerHTML = `
                            <div class="alert alert-danger">
                                Wystąpił błąd podczas pobierania rezerwacji: ${error.message}
                            </div>
                        `;
                        });
                }

                function displayRezerwacje(rezerwacje) {
                    if (rezerwacje.length === 0) {
                        rezerwacjeContainer.innerHTML =
                            '<div class="alert alert-info">Brak rezerwacji w bazie danych.</div>';
                        return;
                    }

                    let html = `
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Imię</th>
                                    <th>Email</th>
                                    <th>Telefon</th>
                                    <th>Data</th>
                                    <th>Godzina</th>
                                    <th>Stolik</th>
                                    <th>Osoby</th>
                                    <th>Status</th>
                                    <th>Utworzono</th>
                                    <th>Akcje</th>
                                </tr>
                            </thead>
                            <tbody>
                `;

                    rezerwacje.forEach((rezerwacja) => {
                        const data = new Date(rezerwacja.data);
                        const dataFormatted = data.toLocaleDateString("pl-PL");

                        const statusClass = `status-${rezerwacja.status}`;
                        const statusText =
                            rezerwacja.status.charAt(0).toUpperCase() +
                            rezerwacja.status.slice(1);

                        html += `
                        <tr>
                            <td>${rezerwacja.id}</td>
                            <td>${rezerwacja.imie}</td>
                            <td>${rezerwacja.email}</td>
                            <td>${rezerwacja.telefon || "-"}</td>
                            <td>${dataFormatted}</td>
                            <td>${rezerwacja.godzina}</td>
                            <td>Nr ${rezerwacja.stolik.numer} (${
                            rezerwacja.stolik.pojemnosc
                        } os.)</td>
                            <td>${rezerwacja.liczba_osob}</td>
                            <td class="${statusClass}">${statusText}</td>
                            <td>${new Date(
                                rezerwacja.created_at
                            ).toLocaleString("pl-PL")}</td>
                            <td>
                                <button class="btn btn-sm btn-primary btn-action change-status-btn" data-id="${
                                    rezerwacja.id
                                }" data-status="${rezerwacja.status}">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                        </tr>
                    `;

                        if (rezerwacja.wiadomosc) {
                            html += `
                            <tr class="table-light">
                                <td colspan="11">
                                    <strong>Wiadomość:</strong> ${rezerwacja.wiadomosc}
                                </td>
                            </tr>
                        `;
                        }
                    });

                    html += `
                            </tbody>
                        </table>
                    </div>
                `;

                    rezerwacjeContainer.innerHTML = html;

                    document
                        .querySelectorAll(".change-status-btn")
                        .forEach((btn) => {
                            btn.addEventListener("click", function () {
                                const id = this.getAttribute("data-id");
                                const status = this.getAttribute("data-status");

                                reservationIdInput.value = id;
                                reservationStatusSelect.value = status;

                                statusModal.show();
                            });
                        });
                }

                refreshBtn.addEventListener("click", function () {
                    loadRezerwacje();
                    loadStats();
                });

                addTestBtn.addEventListener("click", function () {
                    axios
                        .post("/api/admin/rezerwacje/test")
                        .then((response) => {
                            if (response.data.status === "success") {
                                alert("Dodano testową rezerwację");
                                loadRezerwacje();
                                loadStats();
                            } else {
                                alert("Błąd: " + response.data.message);
                            }
                        })
                        .catch((error) => {
                            console.error("Błąd:", error);
                            alert(
                                "Wystąpił błąd podczas dodawania testowej rezerwacji"
                            );
                        });
                });

                confirmClearBtn.addEventListener("click", function () {
                    axios
                        .delete("/api/admin/rezerwacje")
                        .then((response) => {
                            if (response.data.status === "success") {
                                alert(response.data.message);
                                loadRezerwacje();
                                loadStats();

                                const modal = bootstrap.Modal.getInstance(
                                    document.getElementById("clearModal")
                                );
                                modal.hide();
                            } else {
                                alert("Błąd: " + response.data.message);
                            }
                        })
                        .catch((error) => {
                            console.error("Błąd:", error);
                            alert("Wystąpił błąd podczas usuwania rezerwacji");
                        });
                });

                confirmStatusBtn.addEventListener("click", function () {
                    const id = reservationIdInput.value;
                    const status = reservationStatusSelect.value;

                    axios
                        .post("/api/admin/rezerwacje/status", {
                            id: id,
                            status: status,
                        })
                        .then((response) => {
                            if (response.data.status === "success") {
                                statusModal.hide();
                                loadRezerwacje();
                                loadStats();
                            } else {
                                alert("Błąd: " + response.data.message);
                            }
                        })
                        .catch((error) => {
                            console.error("Błąd:", error);
                            alert("Wystąpił błąd podczas zmiany statusu");
                        });
                });

                loadRezerwacje();
                loadStats();
            });
        </script>
    </body>
</html>
