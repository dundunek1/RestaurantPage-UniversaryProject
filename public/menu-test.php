<?php include 'data/menu-data.php'; ?>

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

            <!--Menu dynamicznie-->
            <?php foreach ($menu as $category => $section): ?>
                <section id="<?= strtolower(str_replace(' ', '-', $category)) ?>" class="menu-category">
                    <div class="menu-header">
                        <h2 class="menu-category-title"><?= htmlspecialchars($category) ?></h2>
                        <p><?= htmlspecialchars($section['subtitle']) ?></p>
                    </div>

                    <ul class="list-group mb-4">
                        <?php foreach ($section['dishes'] as $dish): ?>
                            <li class="list-group-item menu-item <?= in_array('chef-recommendation', $dish['categories']) ? 'chef-recommendation' : '' ?>"
                                data-categories="<?= implode(' ', $dish['categories']) ?>"
                                onclick="toggleDetails('<?= $dish['id'] ?>-details')">

                                <div class="item-text">
                                    <strong>
                                        <?= htmlspecialchars($dish['name']) ?>
                                        <?php if (!empty($dish['badge'])): ?>
                                            <span class="special-badge"><?= $dish['badge'] ?></span>
                                        <?php endif; ?>
                                    </strong><br />
                                    <?= htmlspecialchars($dish['descShort']) ?>
                                </div>

                                <span class="price"><?= $dish['price'] ?> zł</span>
                            </li>

                        <div id="<?= $dish['id'] ?>-details" class="dish-details">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?= $dish['img'] ?>" alt="<?= htmlspecialchars($dish['name']) ?>" class="dish-image"/>
                                </div>

                                <div class="col-md-8">
                                    <h5><?= htmlspecialchars($dish['name']) ?></h5>
                                    <p class="ingredients">Składniki: <?= htmlspecialchars($dish['ingredients']) ?></p>
                                    <p><?= htmlspecialchars($dish['descFull']) ?></p>
                                    
                                    <div class="dietary-info">
                                        <span class="dietary-badge bg-secondary"><?= $dish['kcal'] ?> kcal</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </ul>
                </section>
            <?php endforeach; ?>
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