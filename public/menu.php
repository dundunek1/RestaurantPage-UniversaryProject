<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Menu - Restauracja Podkarpackie Przysmaki</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="css/menu.css" rel="stylesheet"/>
    </head>

    <body>
         <!--Nawigacja-->
        <?php include 'layout/navbar.php'; ?>

        <!-- Powitanie-->
        <header class="bg-light text-center py-5">
            <div class="container">
                <h1 class="display-4">Nasze Menu</h1>
                <p class="lead">Zapraszamy do zapoznania się z najnowszą ofertą restauracji.</p>
                <p class="text-muted"> Kliknij na danie, aby zobaczyć więcej szczegółów</p>
            </div>
        </header>

        <!-- Menu-->
        <main class="container py-4">
            <!-- Filtrowanie menu -->
            <div class="filter-container">
                <h5>Filtruj menu</h5>

                <div class="mb-2">
                    <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="all">
                            Wszystkie
                    </button>

                    <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="vegetarian">
                            Wegetariańskie
                    </button>

                    <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="gluten-free">
                            Bez glutenu
                    </button>

                    <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="spicy">
                            Ostre
                    </button>

                    <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="chef-recommendation">
                            Polecane przez szefa
                    </button>
                </div>
            </div>

            <!-- Nawigacja po kategoriach menu -->
            <div class="menu-pills-container">
                <ul class="nav nav-pills mb-4" id="menuTabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#zupy">Zupy</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#przystawki">Przystawki</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#dania-glowne">Dania główne</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#burgery">Burgery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#makarony">Makarony</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#dania-regionalne">Dania regionalne</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#desery">Desery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#dla-dzieci">Dla dzieci</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#napoje">Napoje</a>
                    </li>
                </ul>
            </div>

            <!-- Zupy -->
            <section id="zupy" class="menu-category">
                <div class="menu-header">
                    <h2 class="menu-category-title">Zupy</h2>
                    <p>Tradycyjne smaki z lokalnych składników</p>
                </div>

                <ul class="list-group mb-4">
                    <li class="list-group-item menu-item"
                        data-categories=""
                        onclick="toggleDetails('kapusniak-details')">

                        <div class="item-text">
                            <strong>Kapuśniak na żeberkach</strong><br /> Gęsta zupa z żeberkami i kiszoną kapustą.
                        </div>

                        <span class="price">24 zł</span>
                    </li>

                    <div id="kapusniak-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="assets\kapusniak-zeberka.jpeg"
                                     alt="Kapuśniak na żeberkach"
                                     class="dish-image"/>
                            </div>

                            <div class="col-md-8">
                                <h5>Kapuśniak na żeberkach</h5>
                                <p class="ingredients">
                                    Składniki: żeberka wieprzowe, kiszona
                                    kapusta, marchew, pietruszka, ziemniaki,
                                    przyprawy
                                </p>
                                <p>
                                    Tradycyjny kapuśniak podkarpacki gotowany na
                                    wędzonych żeberkach. Zupa ma gęstą
                                    konsystencję, doskonały balans kwaskowatości
                                    i delikatnej słodyczy warzyw. Podawana z
                                    kawałkami mięsa i pieczywem na zakwasie.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary">430 kcal</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item chef-recommendation"
                        data-categories="chef-recommendation"
                        onclick="toggleDetails('zalewajka-details')"
                    >
                        <div class="item-text">
                            <strong
                                >Zalewajka podkarpacka
                                <span class="special-badge"
                                    >Polecane</span
                                ></strong
                            ><br />
                            Zupa z zakwasu żurkowego, ziemniaków i kiełbasy.
                        </div>
                        <span class="price">22 zł</span>
                    </li>
                    <div id="zalewajka-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\zalewajka.webp"
                                    alt="Zalewajka podkarpacka"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Zalewajka podkarpacka</h5>
                                <p class="ingredients">
                                    Składniki: zakwas żurkowy, ziemniaki,
                                    kiełbasa wiejska, boczek wędzony, czosnek,
                                    majeranek
                                </p>
                                <p>
                                    Specjalność naszego szefa kuchni!
                                    Autentyczna zalewajka, której receptura
                                    przekazywana jest w regionie od pokoleń.
                                    Bogaty, głęboki smak zawdzięcza naturalnemu
                                    zakwasowi przygotowywanemu w naszej
                                    restauracji oraz wysokiej jakości lokalnej
                                    kiełbasie.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >380 kcal</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('polanowski-details')"
                    >
                        <div class="item-text">
                            <strong>Barszcz polanowski z uszkami</strong><br />
                            Tradycyjny czerwony barszcz z uszkami grzybowymi.
                        </div>
                        <span class="price">26 zł</span>
                    </li>
                    <div id="polanowski-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\barszcz-czerw.jpeg"
                                    alt="Barszcz polanowski"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Barszcz polanowski z uszkami</h5>
                                <p class="ingredients">
                                    Składniki: naturalny zakwas buraczany,
                                    warzywa, przyprawy, uszka z nadzieniem
                                    grzybowym
                                </p>
                                <p>
                                    Wyrazisty w smaku, klarowny barszcz czerwony
                                    na zakwasie z dodatkiem suszonych grzybów.
                                    Serwowany z ręcznie lepionymi uszkami
                                    nadziewanymi farszem z prawdziwków i
                                    podgrzybków zbieranych w Bieszczadach.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >320 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian seasonal"
                        onclick="toggleDetails('potrawa-details')"
                    >
                        <div class="item-text">
                            <strong>Zupa z pokrzyw z jajkiem</strong><br />
                            Wiosenna zupa z młodych pokrzyw, czosnku i jajka na
                            twardo.
                        </div>
                        <span class="price">19 zł</span>
                    </li>
                    <div id="potrawa-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\zupa-pokrzywa.jpg"
                                    alt="Zupa z pokrzyw"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Zupa z pokrzyw z jajkiem</h5>
                                <p class="ingredients">
                                    Składniki: młode pokrzywy, czosnek,
                                    ziemniaki, śmietana, jajko, przyprawy
                                </p>
                                <p>
                                    Sezonowa specjalność - lekka zupa z młodych
                                    zbieranych ręcznie pokrzyw. Doskonale
                                    smakuje z dodatkiem kwaśnej śmietany i jajka
                                    ugotowanego na twardo. Znana ze swoich
                                    zdrowotnych właściwości.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >290 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                    <span
                                        class="dietary-badge bg-info text-white"
                                        >Sezonowe</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian gluten-free"
                        onclick="toggleDetails('chlodnik-details')"
                    >
                        <div class="item-text">
                            <strong>Chłodnik z botwinki</strong><br />
                            Orzeźwiająca zupa na bazie kefiru z młodymi
                            buraczkami.
                        </div>
                        <span class="price">20 zł</span>
                    </li>
                    <div id="chlodnik-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\chlodnik-botwinka.avif"
                                    alt="Chłodnik z botwinki"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Chłodnik z botwinki</h5>
                                <p class="ingredients">
                                    Składniki: botwinka, kefir, ogórek,
                                    rzodkiewka, koperek, jajko
                                </p>
                                <p>
                                    Idealny na ciepłe dni, orzeźwiający chłodnik
                                    z młodych buraków. Smak podkreślają
                                    chrupiące warzywa i aromatyczne zioła.
                                    Orzeźwiający, delikatnie kwaśny z wyczuwalną
                                    nutą słodyczy buraczków.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >260 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>

            <!-- Przystawki -->
            <section id="przystawki" class="menu-category">
                <div class="menu-header">
                    <h2 class="menu-category-title">Przystawki</h2>
                    <p>Doskonałe na rozpoczęcie kulinarnej podróży</p>
                </div>

                <ul class="list-group mb-4">
                    <li
                        class="list-group-item menu-item chef-recommendation"
                        data-categories="chef-recommendation vegetarian"
                        onclick="toggleDetails('proziaki-details')"
                    >
                        <div class="item-text">
                            <strong
                                >Proziaki z masłem czosnkowym
                                <span class="special-badge"
                                    >Polecane</span
                                ></strong
                            ><br />
                            Podkarpackie placki z twarogiem i masłem.
                        </div>
                        <span class="price">18 zł</span>
                    </li>
                    <div id="proziaki-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\proziaki.webp"
                                    alt="Proziaki z masłem czosnkowym"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Proziaki z masłem czosnkowym</h5>
                                <p class="ingredients">
                                    Składniki: mąka pszenna, soda oczyszczona
                                    (proza), maślanka, twaróg, masło, czosnek
                                </p>
                                <p>
                                    Tradycyjne podkarpackie bułeczki wypiekane
                                    na sodzie, według oryginalnej receptury
                                    przekazywanej z pokolenia na pokolenie.
                                    Podawane z domowym masłem czosnkowym i
                                    białym serem. Idealne jako przystawka lub
                                    dodatek do zup.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >320 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('fuczki-details')"
                    >
                        <div class="item-text">
                            <strong>Fuczki z kiszoną kapustą</strong><br />
                            Placki z kapusty i ciasta naleśnikowego z kwaśną
                            śmietaną.
                        </div>
                        <span class="price">21 zł</span>
                    </li>
                    <div id="fuczki-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\fuczki.jpg"
                                    alt="Fuczki z kiszoną kapustą"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Fuczki z kiszoną kapustą</h5>
                                <p class="ingredients">
                                    Składniki: kapusta kiszona, mąka, jajka,
                                    mleko, cebula, przyprawy
                                </p>
                                <p>
                                    Mało znane poza regionem placki, których
                                    głównym składnikiem jest kiszona kapusta.
                                    Smażone na złoty kolor, serwowane z kwaśną
                                    śmietaną. Łączą w sobie kwaskowatość kapusty
                                    z delikatnością ciasta naleśnikowego.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >350 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="spicy gluten-free"
                        onclick="toggleDetails('tartinki-details')"
                    >
                        <div class="item-text">
                            <strong>Tartinki z pastą z fasoli Piękny Jaś</strong
                            ><br />
                            Grzanki z kremową pastą fasolową, chorizo i
                            papryczką chili.
                        </div>
                        <span class="price">24 zł</span>
                    </li>
                    <div id="tartinki-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\tartinki.jpg"
                                    alt="Tartinki z pastą z fasoli"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Tartinki z pastą z fasoli Piękny Jaś</h5>
                                <p class="ingredients">
                                    Składniki: fasola Piękny Jaś, czosnek,
                                    rozmaryn, oliwa, pieczywo bezglutenowe,
                                    chorizo, papryczka chili
                                </p>
                                <p>
                                    Wytrawna przystawka łącząca tradycję z
                                    nowoczesnością. Wykorzystujemy słynną fasolę
                                    z Doliny Dunajca do przygotowania kremowej
                                    pasty, którą podajemy na chrupiących
                                    grzankach z pikantnym chorizo i świeżą
                                    papryczką chili.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >310 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                    <span
                                        class="dietary-badge bg-danger text-white"
                                        >Ostre</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('oscypek-details')"
                    >
                        <div class="item-text">
                            <strong>Grillowany oscypek z żurawiną</strong><br />
                            Tradycyjny wędzony ser owczy z konfiturą żurawinową.
                        </div>
                        <span class="price">26 zł</span>
                    </li>
                    <div id="oscypek-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\oscypek.jpg"
                                    alt="Grillowany oscypek"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Grillowany oscypek z żurawiną</h5>
                                <p class="ingredients">
                                    Składniki: oryginalny oscypek, konfitura
                                    żurawinowa, rukola
                                </p>
                                <p>
                                    Oryginalny oscypek z certyfikatem,
                                    przywożony bezpośrednio od baców z Podhala.
                                    Delikatnie grillowany, aby wydobyć jego
                                    wyjątkowy smak i aromat. Podawany z domową
                                    konfiturą żurawinową, która doskonale
                                    równoważy słoność sera.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >280 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>

            <!-- Dania główne -->
            <section id="dania-glowne" class="menu-category">
                <div class="menu-header">
                    <h2 class="menu-category-title">Dania główne</h2>
                    <p>Kuchnia tradycyjna w nowoczesnym wydaniu</p>
                </div>

                <ul class="list-group mb-4">
                    <li
                        class="list-group-item menu-item chef-recommendation"
                        data-categories="chef-recommendation"
                        onclick="toggleDetails('dzik-details')"
                    >
                        <div class="item-text">
                            <strong
                                >Pieczeń z dzika "Knieja"
                                <span class="special-badge"
                                    >Polecane</span
                                ></strong
                            ><br />
                            Z sosem jałowcowym, kaszą i buraczkami.
                        </div>
                        <span class="price">42 zł</span>
                    </li>
                    <div id="dzik-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\pieczen-dzik.jpg"
                                    alt="Pieczeń z dzika"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Pieczeń z dzika "Knieja"</h5>
                                <p class="ingredients">
                                    Składniki: dziczyzna, jałowiec, czerwone
                                    wino, czosnek, zioła, kasza gryczana,
                                    buraczki
                                </p>
                                <p>
                                    Specjalność naszego szefa kuchni - soczysta
                                    pieczeń z dzika z Bieszczad, marynowana w
                                    ziołach i czerwonym winie, a następnie
                                    powoli pieczona. Podawana z aromatycznym
                                    sosem na bazie jałowca, tradycyjną kaszą
                                    gryczaną i buraczkami zasmażanymi.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >520 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        onclick="toggleDetails('stek-details')"
                    >
                        <div class="item-text">
                            <strong>Stek z antrykotu</strong><br />
                            Grillowany stek z masłem ziołowym, frytkami i
                            surówką.
                        </div>
                        <span class="price">54 zł</span>
                    </li>
                    <div id="stek-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\steak.png"
                                    alt="Stek z antrykotu"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Stek z antrykotu</h5>
                                <p class="ingredients">
                                    Składniki: antrykot wołowy, masło, rozmaryn,
                                    tymianek, czosnek, ziemniaki, warzywa
                                    sezonowe
                                </p>
                                <p>
                                    Soczysty stek z najlepszej jakości wołowiny,
                                    pochodzącej od lokalnych hodowców.
                                    Grillowany według preferencji gościa,
                                    podawany z aromatycznym masłem ziołowym,
                                    chrupiącymi frytkami z regionalnych
                                    ziemniaków i świeżą surówką sezonową.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >620 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('golab-details')"
                    >
                        <div class="item-text">
                            <strong>Gołąbki po łemkowsku</strong><br />
                            Ziemniaki i kasza w liściach kapusty.
                        </div>
                        <span class="price">26 zł</span>
                    </li>
                    <div id="golab-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\golabki.jpg"
                                    alt="Gołąbki po łemkowsku"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Gołąbki po łemkowsku</h5>
                                <p class="ingredients">
                                    Składniki: kapusta, ziemniaki, kasza
                                    gryczana, cebula, grzyby leśne, śmietana
                                </p>
                                <p>
                                    Tradycyjne danie kuchni łemkowskiej,
                                    przygotowane według oryginalnej receptury.
                                    Gołąbki nadziewane są mieszanką ziemniaków i
                                    kaszy gryczanej z dodatkiem grzybów leśnych.
                                    Podawane z sosem śmietanowym i kwaśną
                                    śmietaną.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >450 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('pierogi-details')"
                    >
                        <div class="item-text">
                            <strong>Pierożki z bryndzą i miętą</strong><br />
                            Delikatne pierogi z bryndzą i świeżą miętą.
                        </div>
                        <span class="price">23 zł</span>
                    </li>
                    <div id="pierogi-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\pierogi.jpg"
                                    alt="Pierożki z bryndzą"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Pierożki z bryndzą i miętą</h5>
                                <p class="ingredients">
                                    Składniki: mąka, jajka, bryndza, twaróg,
                                    mięta, masło
                                </p>
                                <p>
                                    Delikatne pierogi z cienkiego ciasta,
                                    nadziewane tradycyjną mieszanką bryndzy i
                                    białego sera z dodatkiem świeżej mięty,
                                    która nadaje im orzeźwiającego charakteru.
                                    Podawane z okrasą z masła i skwarkami
                                    (opcjonalnie).
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >390 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item chef-recommendation"
                        data-categories="chef-recommendation gluten-free"
                        onclick="toggleDetails('golonka-details')"
                    >
                        <div class="item-text">
                            <strong
                                >Golonka po laskowej
                                <span class="special-badge"
                                    >Polecane</span
                                ></strong
                            ><br />
                            Pieczona golonka z kapustą zasmażaną i ziemniakami.
                        </div>
                        <span class="price">45 zł</span>
                    </li>
                    <div id="golonka-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\golonka.jpg"
                                    alt="Golonka po laskowej"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Golonka po laskowej</h5>
                                <p class="ingredients">
                                    Składniki: golonka wieprzowa, czosnek,
                                    majeranek, kminek, piwo, kapusta, ziemniaki
                                </p>
                                <p>
                                    Golonka marynowana w lokalnym piwie
                                    rzeszowskim, z dodatkiem aromatycznych ziół
                                    i przypraw, a następnie powoli pieczona do
                                    uzyskania delikatnego, soczystego mięsa i
                                    chrupiącej skórki. Serwowana z kapustą
                                    zasmażaną i pieczonymi ziemniakami. Porcja
                                    dla 1-2 osób.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >680 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>

            <!-- Burgery -->
            <section id="burgery" class="menu-category">
                <div class="menu-header">
                    <h2 class="menu-category-title">Burgery</h2>
                    <p>Tradycyjne smaki w nowoczesnym wydaniu</p>
                </div>

                <ul class="list-group mb-4">
                    <li
                        class="list-group-item menu-item chef-recommendation"
                        data-categories="chef-recommendation"
                        onclick="toggleDetails('wiejski-details')"
                    >
                        <div class="item-text">
                            <strong
                                >Wiejski burger z wołowiną
                                <span class="special-badge"
                                    >Polecane</span
                                ></strong
                            ><br />
                            200g sezonowanej wołowiny, karmelizowana cebula,
                            ogórek kiszony, domowy sos.
                        </div>
                        <span class="price">29 zł</span>
                    </li>
                    <div id="wiejski-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\burger-wiejski.jpg"
                                    alt="Wiejski burger"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Wiejski burger z wołowiną</h5>
                                <p class="ingredients">
                                    Składniki: wołowina sezonowana, bułka
                                    pszenna, karmelizowana cebula, ogórek
                                    kiszony, boczek, majonez, musztarda, sałata,
                                    pomidor
                                </p>
                                <p>
                                    Nasz flagowy burger z ręcznie formowanym
                                    kotletem z najlepszej jakości wołowiny,
                                    wyróżniający się dodatkiem tradycyjnych
                                    podkarpackich smaków. Karmelizowana cebula i
                                    chrupiący ogórek kiszony nadają mu
                                    wyjątkowego charakteru.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >550 kcal</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="spicy"
                        onclick="toggleDetails('bieszczady-details')"
                    >
                        <div class="item-text">
                            <strong>Burger "Bieszczadzki" z dzikiem</strong
                            ><br />
                            Kotlet z dziczyzny, konfitura z czerwonej cebuli,
                            ser wędzony, sos żurawinowy.
                        </div>
                        <span class="price">36 zł</span>
                    </li>
                    <div id="bieszczady-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\burger-dzik.webp"
                                    alt="Burger Bieszczadzki"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Burger "Bieszczadzki" z dzikiem</h5>
                                <p class="ingredients">
                                    Składniki: mięso z dzika, bułka pszenna
                                    własnego wypieku, czerwona cebula, ser
                                    wędzony, żurawina, rukola, sos jałowcowy
                                </p>
                                <p>
                                    Wyjątkowy burger dla poszukiwaczy nowych
                                    smaków. Kotlet przygotowany z dziczyzny z
                                    Bieszczad, połączony z konfiturą z czerwonej
                                    cebuli i lokalnym serem wędzonym. Całość
                                    dopełnia autorski sos żurawinowo-jałowcowy.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >590 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-danger text-white"
                                        >Pikantny</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('vege-details')"
                    >
                        <div class="item-text">
                            <strong>Burger "Połonina" wegetariański</strong
                            ><br />
                            Kotlet z kaszy gryczanej i borowików, ser
                            koryciński, rukola, sos majonezowy.
                        </div>
                        <span class="price">26 zł</span>
                    </li>
                    <div id="vege-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\burger-wege.avif"
                                    alt="Burger wegetariański"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Burger "Połonina" wegetariański</h5>
                                <p class="ingredients">
                                    Składniki: kasza gryczana, borowiki, twaróg,
                                    jajko, cebula, ser koryciński, rukola,
                                    majonez, musztarda, pietruszka
                                </p>
                                <p>
                                    Inspirowany tradycyjną kuchnią górali burger
                                    wegetariański. Kotlet przygotowany z kaszy
                                    gryczanej i aromatycznych borowików,
                                    połączony z regionalnym serem korycińskim.
                                    Podawany z rukolą i domowym sosem
                                    majonezowo-ziołowym.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >480 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>

            <!-- Makarony -->
            <section id="makarony" class="menu-category">
                <div class="menu-header">
                    <h2 class="menu-category-title">Makarony</h2>
                    <p>Świeże makarony z najlepszymi dodatkami</p>
                </div>

                <ul class="list-group mb-4">
                    <li
                        class="list-group-item menu-item chef-recommendation"
                        data-categories="chef-recommendation vegetarian"
                        onclick="toggleDetails('tagliatelle-details')"
                    >
                        <div class="item-text">
                            <strong
                                >Tagliatelle z kurkami i parmezanem
                                <span class="special-badge"
                                    >Polecane</span
                                ></strong
                            ><br />
                            Świeży makaron z sosem śmietanowo-grzybowym i
                            płatkami parmezanu.
                        </div>
                        <span class="price">28 zł</span>
                    </li>
                    <div id="tagliatelle-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\tagliatelle-kurki.jpg"
                                    alt="Tagliatelle z kurkami"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Tagliatelle z kurkami i parmezanem</h5>
                                <p class="ingredients">
                                    Składniki: świeży makaron jajeczny, kurki,
                                    śmietana 36%, cebula szalotka, czosnek,
                                    białe wino, parmezan, natka pietruszki
                                </p>
                                <p>
                                    Ręcznie robiony makaron tagliatelle z sosem
                                    na bazie świeżych kurek zbieranych w
                                    podkarpackich lasach. Dopełniony delikatną
                                    śmietaną, białym winem i świeżo tartym
                                    parmezanem. Aromatyzowany świeżymi ziołami.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >520 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        onclick="toggleDetails('pappardelle-details')"
                    >
                        <div class="item-text">
                            <strong>Pappardelle z ragu z dziczyzny</strong
                            ><br />
                            Szeroki makaron z długo duszonym mięsem dzikim i
                            warzywami.
                        </div>
                        <span class="price">34 zł</span>
                    </li>
                    <div id="pappardelle-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\pappadrelle.jpg"
                                    alt="Pappardelle z ragu"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Pappardelle z ragu z dziczyzny</h5>
                                <p class="ingredients">
                                    Składniki: świeży makaron jajeczny,
                                    dziczyzna, marchew, seler, por, czerwone
                                    wino, pomidory, rozmaryn, tymianek
                                </p>
                                <p>
                                    Intensywne danie z ręcznie robionym,
                                    szerokim makaronem pappardelle i bogatym
                                    ragu z dziczyzny. Mięso duszone jest przez
                                    kilka godzin z warzywami i czerwonym winem,
                                    co nadaje mu głębokiego, wyrazistego smaku.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >560 kcal</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="spicy"
                        onclick="toggleDetails('rigatoni-details')"
                    >
                        <div class="item-text">
                            <strong>Rigatoni arrabbiata</strong><br />
                            Makaron rurki z pikantnym sosem pomidorowym i
                            bazylią.
                        </div>
                        <span class="price">24 zł</span>
                    </li>
                    <div id="rigatoni-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\rigatoni.jpg"
                                    alt="Rigatoni arrabbiata"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Rigatoni arrabbiata</h5>
                                <p class="ingredients">
                                    Składniki: makaron rigatoni, pomidory San
                                    Marzano, czosnek, papryczka chili, oliwa z
                                    oliwek, bazylia, pecorino
                                </p>
                                <p>
                                    Klasyczne włoskie danie w naszym wykonaniu.
                                    Makaron rigatoni doskonale komponuje się z
                                    wyrazistym, pikantnym sosem pomidorowym.
                                    Całość dopełnia świeża bazylia i starty ser
                                    pecorino.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >480 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-danger text-white"
                                        >Ostre</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>

            <!-- Dania regionalne -->
            <section id="dania-regionalne" class="menu-category">
                <div class="menu-header">
                    <h2 class="menu-category-title">Dania regionalne</h2>
                    <p>Autentyczne smaki Podkarpacia</p>
                </div>

                <ul class="list-group mb-4">
                    <li
                        class="list-group-item menu-item chef-recommendation"
                        data-categories="chef-recommendation"
                        onclick="toggleDetails('kwaśnica-details')"
                    >
                        <div class="item-text">
                            <strong
                                >Kwaśnica po góralsku
                                <span class="special-badge"
                                    >Polecane</span
                                ></strong
                            ><br />
                            Tradycyjna zupa na bazie kiszonej kapusty z
                            wędzonymi żeberkami.
                        </div>
                        <span class="price">27 zł</span>
                    </li>
                    <div id="kwaśnica-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\kwasnica.jpg"
                                    alt="Kwaśnica po góralsku"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Kwaśnica po góralsku</h5>
                                <p class="ingredients">
                                    Składniki: kapusta kiszona, żeberka wędzone,
                                    marchew, ziemniaki, czosnek, kminek,
                                    majeranek
                                </p>
                                <p>
                                    Tradycyjna zupa górali łemkowskich,
                                    przygotowana na wywarze z wędzonych żeberek
                                    z długo gotowaną kiszoną kapustą. Doprawiona
                                    czosnkiem, kminkiem i majerankiem. Podawana
                                    z pieczywem na zakwasie.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >450 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('hreczanyky-details')"
                    >
                        <div class="item-text">
                            <strong>Hreczanyky</strong><br />
                            Kotlety z kaszy gryczanej i grzybów leśnych.
                        </div>
                        <span class="price">26 zł</span>
                    </li>
                    <div id="hreczanyky-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\hreczanki.jpg"
                                    alt="Hreczanyky"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Hreczanyky</h5>
                                <p class="ingredients">
                                    Składniki: kasza gryczana, grzyby leśne,
                                    cebula, jajka, czosnek, natka pietruszki
                                </p>
                                <p>
                                    Tradycyjne kotlety wschodniokresowej kuchni,
                                    przygotowane z kaszy gryczanej i
                                    aromatycznych grzybów leśnych. Smażone na
                                    klarowanym maśle, podawane z sosem grzybowym
                                    i zasmażanymi buraczkami.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >410 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        onclick="toggleDetails('karminadle-details')"
                    >
                        <div class="item-text">
                            <strong>Karminadle ze szpinakiem</strong><br />
                            Tradycyjne śląskie kotlety mielone nadziewane
                            szpinakiem.
                        </div>
                        <span class="price">29 zł</span>
                    </li>
                    <div id="karminadle-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\karmindale.jpeg"
                                    alt="Karminadle ze szpinakiem"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Karminadle ze szpinakiem</h5>
                                <p class="ingredients">
                                    Składniki: mięso wieprzowo-wołowe, szpinak,
                                    czosnek, cebula, jajko, bułka tarta,
                                    śmietana, gałka muszkatołowa
                                </p>
                                <p>
                                    Nasza interpretacja tradycyjnych śląskich
                                    kotletów mielonych. Soczyste mięso z
                                    dodatkiem szpinaku, czosnku i przypraw.
                                    Podawane z puree ziemniaczanym i zasmażaną
                                    kapustą czerwoną.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >520 kcal</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>

            <!-- Desery -->
            <section id="desery" class="menu-category">
                <div class="menu-header">
                    <h2 class="menu-category-title">Desery</h2>
                    <p>Słodkie zakończenie kulinarnej podróży</p>
                </div>

                <ul class="list-group mb-4">
                    <li
                        class="list-group-item menu-item chef-recommendation"
                        data-categories="chef-recommendation vegetarian"
                        onclick="toggleDetails('sernik-details')"
                    >
                        <div class="item-text">
                            <strong
                                >Sernik z ziemniakami
                                <span class="special-badge"
                                    >Polecane</span
                                ></strong
                            ><br />
                            Z konfiturą z jarzębiny.
                        </div>
                        <span class="price">16 zł</span>
                    </li>
                    <div id="sernik-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\sernik-ziemniak.jpeg"
                                    alt="Sernik z ziemniakami"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Sernik z ziemniakami</h5>
                                <p class="ingredients">
                                    Składniki: twaróg, ziemniaki, jajka, cukier,
                                    masło, mąka, konfitury z jarzębiny
                                </p>
                                <p>
                                    Unikatowy podkarpacki deser, którego sekret
                                    tkwi w dodaniu do masy serowej gotowanych
                                    ziemniaków. Dzięki temu sernik zyskuje
                                    wyjątkową konsystencję i wilgotność.
                                    Podawany z domową konfiturą z jarzębiny,
                                    która dodaje delikatnej goryczki.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >320 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('knedle-details')"
                    >
                        <div class="item-text">
                            <strong>Knedle z truskawkami i śmietaną</strong
                            ><br />
                            Delikatne ziemniaczane kluski z nadzieniem z
                            truskawek.
                        </div>
                        <span class="price">22 zł</span>
                    </li>
                    <div id="knedle-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\knedle-trus.jpeg"
                                    alt="Knedle z truskawkami"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Knedle z truskawkami i śmietaną</h5>
                                <p class="ingredients">
                                    Składniki: ziemniaki, mąka, jajko,
                                    truskawki, śmietana, cukier, masło
                                </p>
                                <p>
                                    Pyszny deser z ciasta ziemniaczanego z
                                    nadzieniem ze świeżych truskawek. Podawany z
                                    kwaśną śmietaną i posypany cukrem. Idealny
                                    dla miłośników tradycyjnych, prostych
                                    smaków.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >380 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                    <span
                                        class="dietary-badge bg-info text-white"
                                        >Sezonowe</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian gluten-free"
                        onclick="toggleDetails('jabcok-details')"
                    >
                        <div class="item-text">
                            <strong>Jabcok z sosem waniliowym</strong><br />
                            Tradycyjny placek z jabłkami i kruszonką.
                        </div>
                        <span class="price">19 zł</span>
                    </li>
                    <div id="jabcok-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\jabcok.jpg"
                                    alt="Jabcok z sosem waniliowym"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Jabcok z sosem waniliowym</h5>
                                <p class="ingredients">
                                    Składniki: mąka bezglutenowa, jabłka,
                                    cynamon, cukier waniliowy, masło, jajka, sos
                                    waniliowy
                                </p>
                                <p>
                                    Tradycyjny deser podkarpackich górali -
                                    ciasto z jabłkami i kruszonką. Wypiekany
                                    według starych receptur, ale w wersji
                                    bezglutenowej. Podawany na ciepło z domowym
                                    sosem waniliowym i gałką lodów.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >340 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('kompot-details')"
                    >
                        <div class="item-text">
                            <strong>Kompot z suszu</strong><br />
                            Jabłka, śliwki, gruszki i przyprawy.
                        </div>
                        <span class="price">8 zł</span>
                    </li>
                    <div id="kompot-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\kompot-susz.jpg"
                                    alt="Kompot z suszu"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Kompot z suszu</h5>
                                <p class="ingredients">
                                    Składniki: suszone jabłka, śliwki, gruszki,
                                    cynamon, goździki, miód
                                </p>
                                <p>
                                    Tradycyjny napój świąteczny, ale u nas
                                    dostępny przez cały rok. Przygotowany z
                                    własnoręcznie suszonych owoców z lokalnych
                                    sadów, z dodatkiem naturalnego miodu i
                                    aromatycznych przypraw. Serwowany na ciepło
                                    lub na zimno.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >120 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>

            <!-- Dla dzieci -->
            <section id="dla-dzieci" class="menu-category">
                <div class="menu-header">
                    <h2 class="menu-category-title">Menu dla dzieci</h2>
                    <p>Specjalne dania dla najmłodszych gości</p>
                </div>

                <ul class="list-group mb-4">
                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('mini-proziaki-details')"
                    >
                        <div class="item-text">
                            <strong>Mini proziaczki z dżemem</strong><br />
                            Podawane z domowym dżemem malinowym.
                        </div>
                        <span class="price">14 zł</span>
                    </li>
                    <div id="mini-proziaki-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\mini-proziak.webp"
                                    alt="Mini proziaczki"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Mini proziaczki z dżemem</h5>
                                <p class="ingredients">
                                    Składniki: mąka pszenna, maślanka, soda
                                    oczyszczona (proza), masło, domowy dżem
                                    malinowy
                                </p>
                                <p>
                                    Mniejsza wersja tradycyjnych proziaków,
                                    idealna dla dzieci. Delikatne, puszyste
                                    bułeczki wypiekane na sodzie, podawane z
                                    domowym dżemem malinowym. Proste, ale pełne
                                    smaku danie, które pokocha każde dziecko.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >280 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian gluten-free"
                        onclick="toggleDetails('krem-details')"
                    >
                        <div class="item-text">
                            <strong>Krem z marchewki z grzankami</strong><br />
                            Łagodny, słodkawy krem warzywny.
                        </div>
                        <span class="price">15 zł</span>
                    </li>
                    <div id="krem-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\krem-march.webp"
                                    alt="Krem z marchewki"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Krem z marchewki z grzankami</h5>
                                <p class="ingredients">
                                    Składniki: marchew, ziemniaki, cebula,
                                    imbir, pomarańcza, śmietanka, bezglutenowe
                                    grzanki
                                </p>
                                <p>
                                    Delikatny krem z marchewki z dodatkiem
                                    pomarańczy, który dodaje orzeźwiającego
                                    smaku. Idealny jako lekki obiad dla
                                    najmłodszych. Podawany z chrupiącymi
                                    bezglutenowymi grzankami.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >220 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        onclick="toggleDetails('nuggetsy-details')"
                    >
                        <div class="item-text">
                            <strong>Domowe nuggetsy z kurczaka</strong><br />
                            Z frytkami i mizerią.
                        </div>
                        <span class="price">21 zł</span>
                    </li>
                    <div id="nuggetsy-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\nugget.jpg"
                                    alt="Domowe nuggetsy"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Domowe nuggetsy z kurczaka</h5>
                                <p class="ingredients">
                                    Składniki: filety z kurczaka, panierka
                                    kukurydziana, ziemniaki, ogórek, śmietana,
                                    koperek
                                </p>
                                <p>
                                    Soczyste kawałki kurczaka w chrupiącej,
                                    lekkiej panierce kukurydzianej. Podawane z
                                    domowymi frytkami z regionalnych ziemniaków
                                    i tradycyjną mizerią ze śmietaną i
                                    koperkiem.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >390 kcal</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian"
                        onclick="toggleDetails('nalesniki-details')"
                    >
                        <div class="item-text">
                            <strong>Naleśniki z serem i owocami</strong><br />
                            Delikatne naleśniki z twarożkiem i sezonowymi
                            owocami.
                        </div>
                        <span class="price">18 zł</span>
                    </li>
                    <div id="nalesniki-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\nalesniki.jpeg"
                                    alt="Naleśniki z serem"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Naleśniki z serem i owocami</h5>
                                <p class="ingredients">
                                    Składniki: mąka, mleko, jajka, serek
                                    twarogowy, owoce sezonowe, miód
                                </p>
                                <p>
                                    Puszyste naleśniki nadziewane delikatnym
                                    twarogiem z miodem. Podawane z dodatkiem
                                    świeżych owoców sezonowych i sosem owocowym.
                                    Danie, które zawsze wywołuje uśmiech na
                                    twarzach najmłodszych gości.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >360 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>

            <!-- Napoje -->
            <section id="napoje" class="menu-category">
                <div class="menu-header">
                    <h2 class="menu-category-title">Napoje</h2>
                    <p>Orzeźwiające dodatki do posiłku</p>
                </div>

                <ul class="list-group mb-4">
                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian gluten-free"
                        onclick="toggleDetails('kompot-jablek-details')"
                    >
                        <div class="item-text">
                            <strong>Kompot z jabłek i rabarbaru</strong><br />
                            Domowy napój ze świeżych owoców.
                        </div>
                        <span class="price">10 zł</span>
                    </li>
                    <div id="kompot-jablek-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\kompot-rab.jpeg"
                                    alt="Kompot z jabłek"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Kompot z jabłek i rabarbaru</h5>
                                <p class="ingredients">
                                    Składniki: jabłka, rabarbar, cynamon,
                                    goździki, miód
                                </p>
                                <p>
                                    Orzeźwiający napój przygotowany ze świeżych
                                    jabłek z lokalnych sadów i soczystego
                                    rabarbaru. Delikatnie słodzony miodem i
                                    aromatyzowany cynamonem. Idealny do dań
                                    głównych.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >110 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian gluten-free"
                        onclick="toggleDetails('podpiwek-details')"
                    >
                        <div class="item-text">
                            <strong>Podpiwek regionalny</strong><br />
                            Tradycyjny napój fermentowany bezalkoholowy.
                        </div>
                        <span class="price">12 zł</span>
                    </li>
                    <div id="podpiwek-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\podpiw.jpg"
                                    alt="Podpiwek regionalny"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Podpiwek regionalny</h5>
                                <p class="ingredients">
                                    Składniki: chleb żytni, chmiel, melasa,
                                    zioła, drożdże
                                </p>
                                <p>
                                    Tradycyjny polski napój fermentowany o lekko
                                    słodowym smaku i ciemnej barwie.
                                    Przygotowywany według starej receptury z
                                    dodatkiem regionalnych ziół. Bezalkoholowy,
                                    orzeźwiający, z delikatną pianką.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >130 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian gluten-free"
                        onclick="toggleDetails('lemoniada-details')"
                    >
                        <div class="item-text">
                            <strong>Lemoniada z czarnego bzu</strong><br />
                            Orzeźwiająca lemoniada z kwiatów i owoców czarnego
                            bzu.
                        </div>
                        <span class="price">14 zł</span>
                    </li>
                    <div id="lemoniada-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\lemon-bez.jpg"
                                    alt="Lemoniada z czarnego bzu"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Lemoniada z czarnego bzu</h5>
                                <p class="ingredients">
                                    Składniki: syrop z kwiatów czarnego bzu,
                                    owoce czarnego bzu, cytryna, mięta, woda
                                    gazowana
                                </p>
                                <p>
                                    Wyjątkowa lemoniada o delikatnym, kwiatowym
                                    aromacie czarnego bzu. Idealnie zbalansowana
                                    kwasowość i słodycz. Podawana z lodem,
                                    świeżą miętą i plasterkiem cytryny.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >90 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                    <span
                                        class="dietary-badge bg-warning text-dark"
                                        >Bez glutenu</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <li
                        class="list-group-item menu-item"
                        data-categories="vegetarian gluten-free"
                        onclick="toggleDetails('kwas-details')"
                    >
                        <div class="item-text">
                            <strong>Kwas chlebowy</strong><br />
                            Tradycyjny napój fermentowany na bazie chleba
                            żytniego.
                        </div>
                        <span class="price">11 zł</span>
                    </li>
                    <div id="kwas-details" class="dish-details">
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    src="assets\kwa-chleb.jpg"
                                    alt="Kwas chlebowy"
                                    class="dish-image"
                                />
                            </div>
                            <div class="col-md-8">
                                <h5>Kwas chlebowy</h5>
                                <p class="ingredients">
                                    Składniki: chleb żytni na zakwasie,
                                    rodzynki, cukier, drożdże
                                </p>
                                <p>
                                    Tradycyjny napój kuchni
                                    wschodniosłowiańskiej, który zyskał
                                    popularność również na Podkarpaciu.
                                    Przygotowywany z chleba żytniego, lekko
                                    słodki z wyczuwalną nutą kwaskowatości.
                                    Naturalnie gazowany dzięki procesowi
                                    fermentacji.
                                </p>
                                <div class="dietary-info">
                                    <span class="dietary-badge bg-secondary"
                                        >120 kcal</span
                                    >
                                    <span
                                        class="dietary-badge bg-success text-white"
                                        >Wegetariańskie</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>
        </main>

        <!-- Zarezerwuj-->
        <?php include 'layout/book-now.php'; ?>

        <!-- Kontakt i lokalizacja-->
        <?php include 'layout/location.php'; ?>

        <!-- Stopka-->
        <?php include 'layout/footer.php'; ?>

        <script src="js/menu.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>
