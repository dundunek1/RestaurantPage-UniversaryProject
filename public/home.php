<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Restauracja Podkarpackie Przysmaki</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="css/styles.css" rel="stylesheet"/>
    </head>

    <body>
         <!--Nawigacja-->
        <?php include 'layout/navbar.php'; ?>
        
        <!-- Powitanie-->
        <header class="bg-light text-center py-5">
            <div class="container">
                <h1 class="display-4">Witamy w Podkarpackich Przysmakach!</h1>
                <p class="lead">Daj się zachwycić podkarpackiej kuchni regionalnej.</p>
                <a href="menu.php" class="btn btn-primary btn-lg mt-3">Zobacz nasze menu</a>
            </div>
        </header>

        <!-- Karuzela dań -->
        <div id="carouselJedzenie" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
            <img src="assets/steak.png" class="d-block w-100" alt="Zdjęcie steku" />
            </div>

            <div class="carousel-item" data-bs-interval="5000">
            <img src="assets/buger.png" class="d-block w-100" alt="Zdjęcie burgera" />
            </div>

            <div class="carousel-item" data-bs-interval="5000">
            <img src="assets/pasta.png" class="d-block w-100" alt="Zdjęcie makaronu" />
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselJedzenie" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselJedzenie" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

        <!--O nas-->
        <section id="onas" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">O nas</h2>

                <p class="text-center">
                    "Podkarpackie Przysmaki" to miejsce, gdzie tradycja spotyka
                    się ze smakiem, a każde danie opowiada historię naszego
                    regionu. Z pasją pielęgnujemy kulinarne dziedzictwo
                    Podkarpacia, serwując potrawy inspirowane przepisami naszych
                    babć, przygotowywane z lokalnych produktów – często prosto z
                    łemkowskich wsi, bieszczadzkich gospodarstw i rzeszowskich
                    targów.
                </p>

                <p class="text-center">
                    Nasza restauracja powstała z miłości do podkarpackiej
                    gościnności i prostych, lecz niezwykle aromatycznych smaków.
                    W klimatycznym wnętrzu przypominającym wiejski dom,
                    serwujemy dania, które pachną lasem, świeżym chlebem,
                    wędzonką i przyprawami z ogródka.
                </p>

                <p class="text-center">
                    Zapraszamy nie tylko do stołu – zapraszamy do odkrywania
                    kulinarnej tożsamości Podkarpacia.
                </p>
            </div>
        </section>

        <!--Opinie gości-->
        <section class="py-5 bg-white">
            <div class="container">
                <h2 class="text-center mb-4">Co mówią nasi goście?</h2>
                
                <div class="row text-center">
                    <div class="col-md-4">
                        <blockquote class="blockquote">
                            <p>
                                "Nie sądziłem, że jeszcze poczuję smak
                                dzieciństwa. Jeszcze nieraz tu wrócę!"
                            </p>

                            <footer class="blockquote-footer">
                                Janusz z Krosna
                            </footer>
                        </blockquote>
                    </div>

                    <div class="col-md-4">
                        <blockquote class="blockquote">
                            <p>
                                "Trafiliśmy tu przypadkiem podczas rodzinnego
                                wyjazdu wakacyjnego kilka lat temu. Teraz to
                                stałe miejsce na naszej trasie w Bieszczady."
                            </p>

                            <footer class="blockquote-footer">
                                Monika z Warszawy
                            </footer>
                        </blockquote>
                    </div>

                    <div class="col-md-4">
                        <blockquote class="blockquote">
                            <p>
                                "Cena naprawdę niewielka jak za taką jakość!
                                Nawet student syto poje."
                            </p>

                            <footer class="blockquote-footer">
                                Sebastian, student
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <!-- Zarezerwuj-->
        <?php include 'layout/book-now.php'; ?>

        <!-- Kontakt i lokalizacja-->
        <?php include 'layout/location.php'; ?>

        <!-- Stopka-->
        <?php include 'layout/footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>