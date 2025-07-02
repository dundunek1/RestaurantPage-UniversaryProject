<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Restauracja Podkarpackie Przysmaki</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="css/booking.css" rel="stylesheet"/>
    </head>

    <body>
         <!--Nawigacja-->
        <?php include 'layout/navbar.php'; ?>
        
        <!-- Powitanie-->
        <header class="bg-light text-center py-5">
            <div class="container">
                <h1 class="display-4">Rezerwacja stolika</h1>
                <p class="lead"> Wybierz stolik, datę i godzinę, a my przygotujemy dla Ciebie wyjątkowe miejsce.</p>
                <a href="menu.php" class="btn btn-primary btn-lg mt-3">Zobacz nasze menu</a>
            </div>
        </header>

        <section class="py-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="date-picker">
                            <h4 class="mb-3">Wybierz datę i godzinę</h4>
                            <div class="mb-3">
                                <label for="reservation-date" class="form-label">Data rezerwacji</label >
                                <input type="date"
                                        class="form-control"
                                        id="reservation-date"
                                        required
                                        min="2025-05-11"/>
                            </div>

                            <div class="mb-3">
                                <label for="reservation-time" class="form-label">Godzina rezerwacji</label>
                                <select class="form-select"
                                        id="reservation-time"
                                        required>

                                    <option value="" selected disabled>Wybierz godzinę</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                </select>
                            </div>

                            <button id="check-availability" class="btn btn-primary">
                                    Sprawdź dostępność
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded border">
                            <h4 class="mb-3">Legenda</h4>

                            <div class="d-flex align-items-center mb-2">
                                <div class="legend"></div>
                                <span class="ms-2">Stolik dostępny</span>
                            </div>

                            <div class="d-flex align-items-center mb-2">
                                <div class="legend legend-selected"></div>
                                <span class="ms-2">Stolik wybrany</span>
                            </div>

                            <div class="d-flex align-items-center mb-2">
                                <div class="legend legend-unavailable"></div>
                                <span class="ms-2">Stolik niedostępny</span>
                            </div>

                            <div class="d-flex align-items-center mb-2">
                                <div class="legend legend-bar"></div>
                                <span class="ms-2">Bar</span>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="legend legend-entrance"></div>
                                <span class="ms-2">Wejście</span>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-center mb-4">Wybierz stolik na planie sali</h4>
                
                <div class="restaurant-map mb-4" id="restaurant-map">
                    <!-- Ściany -->
                    <div class="wall wall-top"></div>
                    <div class="wall wall-right "></div>
                    <div class="wall wall-bottom"></div>
                    <div class="wall wall-left"></div>

                    <!-- Wejście -->
                    <div class="entrance"></div>

                    <!-- Bar -->
                    <div class="bar"></div>

                    <!-- Stoliki -->
                    <div
                        class="table "
                        data-table-id="1"
                        style="top: 140px; left: 60px"
                    >
                        Stolik 1<br />4 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="2"
                        style="top: 140px; left: 200px"
                    >
                        Stolik 2<br />2 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="3"
                        style="top: 140px; left: 340px"
                    >
                        Stolik 3<br />4 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="4"
                        style="top: 140px; left: 480px"
                    >
                        Stolik 4<br />2 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="5"
                        style="top: 140px; left: 620px"
                    >
                        Stolik 5<br />6 os.
                    </div>

                    <div
                        class="table"
                        data-table-id="6"
                        style="top: 290px; left: 60px"
                    >
                        Stolik 6<br />4 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="7"
                        style="top: 290px; left: 200px"
                    >
                        Stolik 7<br />8 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="8"
                        style="top: 290px; left: 340px"
                    >
                        Stolik 8<br />2 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="9"
                        style="top: 290px; left: 480px"
                    >
                        Stolik 9<br />4 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="10"
                        style="top: 290px; left: 620px"
                    >
                        Stolik 10<br />2 os.
                    </div>

                    <div
                        class="table"
                        data-table-id="11"
                        style="top: 440px; left: 60px"
                    >
                        Stolik 11<br />6 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="12"
                        style="top: 440px; left: 200px"
                    >
                        Stolik 12<br />4 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="13"
                        style="top: 440px; left: 340px"
                    >
                        Stolik 13<br />2 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="14"
                        style="top: 440px; left: 480px"
                    >
                        Stolik 14<br />4 os.
                    </div>
                    <div
                        class="table"
                        data-table-id="15"
                        style="top: 440px; left: 620px"
                    >
                        Stolik 15<br />2 os.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="table-info d-none" id="table-info">
                            <h4 class="mb-3">Informacje o wybranym stoliku</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <strong>Numer stolika:</strong>
                                        <span id="selected-table-number"></span>
                                    </p>
                                    <p>
                                        <strong>Liczba miejsc:</strong>
                                        <span
                                            id="selected-table-capacity"
                                        ></span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <strong>Data:</strong>
                                        <span id="selected-date"></span>
                                    </p>
                                    <p>
                                        <strong>Godzina:</strong>
                                        <span id="selected-time"></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="reservation-form mt-4 d-none"
                            id="reservation-form"
                        >
                            <h4 class="mb-3">Formularz rezerwacji</h4>
                            <form id="booking-form">
                                <input
                                    type="hidden"
                                    id="form-table-id"
                                    name="table_id"
                                />
                                <input
                                    type="hidden"
                                    id="form-date"
                                    name="data"
                                />
                                <input
                                    type="hidden"
                                    id="form-time"
                                    name="godzina"
                                />
                                <input
                                    type="hidden"
                                    id="form-capacity"
                                    name="liczba_miejsc"
                                />

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label
                                            for="form-name"
                                            class="form-label"
                                            >Imię i nazwisko</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="form-name"
                                            name="imie"
                                            required
                                        />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label
                                            for="form-email"
                                            class="form-label"
                                            >Email</label
                                        >
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="form-email"
                                            name="email"
                                            required
                                        />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label
                                            for="form-phone"
                                            class="form-label"
                                            >Telefon</label
                                        >
                                        <input
                                            type="tel"
                                            class="form-control"
                                            id="form-phone"
                                            name="telefon"
                                        />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label
                                            for="form-guests"
                                            class="form-label"
                                            >Liczba gości</label
                                        >
                                        <input
                                            type="number"
                                            class="form-control"
                                            id="form-guests"
                                            name="liczba_osob"
                                            min="1"
                                            required
                                        />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="form-message" class="form-label"
                                        >Dodatkowe uwagi</label
                                    >
                                    <textarea
                                        class="form-control"
                                        id="form-message"
                                        name="wiadomosc"
                                        rows="3"
                                    ></textarea>
                                </div>

                                <div class="text-center">
                                    <button
                                        type="submit"
                                        class="btn btn-success btn-lg"
                                    >
                                        Zarezerwuj stolik
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div
                            class="alert alert-success mt-4 d-none"
                            id="booking-success"
                        >
                            <h4 class="alert-heading">
                                <i class="bi bi-check-circle-fill me-2"></i
                                >Rezerwacja przyjęta!
                            </h4>
                            <p>
                                Twoja rezerwacja została przyjęta. Potwierdzenie
                                zostało wysłane na podany adres email.
                            </p>
                            <hr />
                            <p class="mb-0">
                                Dziękujemy za wybór restauracji Podkarpackie
                                Przysmaki!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kontakt i lokalizacja-->
        <?php include 'layout/location.php'; ?>

        <!-- Stopka-->
        <?php include 'layout/footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="js/booking.js"></script>
    </body>
</html>
