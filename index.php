<?php
$currentPage = 'index';
?>
<!doctype html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Domov | Moja Spletna Stran</title>
    <link rel="stylesheet" href="lib/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stil.css">
</head>
<body>
<?php require __DIR__ . '/header.php'; ?>

<main class="site-main">
    <section class="hero-section py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Dobrodošli na moji strani</h1>
                    <p class="lead text-secondary mb-4">Sodobne digitalne rešitve za vase potrebe. Oglejte si kratko predstavitev storitev in delovnega procesa.</p>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <a class="btn btn-primary btn-lg" href="kontakt.php">Stopite v stik</a>
                        <a class="btn btn-outline-primary btn-lg" href="o-meni.php">Več o meni</a>
                    </div>
                    <div class="hero-badges d-flex flex-wrap gap-3">
                        <span class="badge-item">Hitro</span>
                        <span class="badge-item">Timsko</span>
                        <span class="badge-item">Učinkovito</span>
                        <span class="badge-item">Zanesljivo</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="glavniCarousel" class="carousel slide carousel-fade rounded-4 shadow-sm overflow-hidden" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#glavniCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slika 1"></button>
                            <button type="button" data-bs-target="#glavniCarousel" data-bs-slide-to="1" aria-label="Slika 2"></button>
                            <button type="button" data-bs-target="#glavniCarousel" data-bs-slide-to="2" aria-label="Slika 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/carousel-1.jpg" class="d-block w-100 carousel-cover" alt="Sodobna delovna postaja za razvoj spletnih strani">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carousel-2.jpg" class="d-block w-100 carousel-cover" alt="Programiranje na prenosniku v moderni pisarni">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carousel-3.jpg" class="d-block w-100 carousel-cover" alt="Skupinski poslovni sestanek in nacrtovanje projekta">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#glavniCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Prejsnja</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#glavniCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Naslednja</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <h2 class="visually-hidden">tabela 1</h2>
            <div class="row g-4">
                <div class="col-xl-6">
                    <article class="card table-card h-100">
                        <h3 class="card-header h5 mb-0">Nase storitve</h3>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 align-middle">
                                <thead>
                                <tr>
                                    <th>Storitev</th>
                                    <th>Opis</th>
                                    <th>Trajanje</th>
                                    <th>Cena</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr><td>Spletni razvoj</td><td>Poslovna stran</td><td>14 dni</td><td>1200 EUR</td><td>Na voljo</td></tr>
                                <tr><td>SEO analiza</td><td>Tehnični pregled</td><td>5 dni</td><td>350 EUR</td><td>Na voljo</td></tr>
                                <tr><td>Landing stran</td><td>Produktna kampanja</td><td>7 dni</td><td>450 EUR</td><td>Na voljo</td></tr>
                                <tr><td>Vzdrževanje</td><td>Mesečna podpora</td><td>30 dni</td><td>200 EUR</td><td>Na voljo</td></tr>
                                <tr><td>UI prenova</td><td>Osvežitev dizajna</td><td>10 dni</td><td>700 EUR</td><td>Omejeno</td></tr>
                                <tr><td>Blog sistem</td><td>Objave in kategorije</td><td>12 dni</td><td>900 EUR</td><td>Na voljo</td></tr>
                                <tr><td>Integracija API</td><td>Povezava sistemov</td><td>8 dni</td><td>650 EUR</td><td>Na voljo</td></tr>
                                <tr><td>Analitika</td><td>Merjenje obiskov</td><td>3 dni</td><td>180 EUR</td><td>Na voljo</td></tr>
                                <tr><td>Testiranje</td><td>Funkcionalni test</td><td>4 dni</td><td>220 EUR</td><td>Na voljo</td></tr>
                                <tr class="last-row"><td class="last-row-left">Posvet</td><td>Tehnični načrt</td><td>1 dan</td><td>90 EUR</td><td class="last-row-right">Na voljo</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                </div>

                <div class="col-xl-6">
                    <article class="card table-card h-100">
                        <h3 class="card-header h5 mb-0">Delovni cas in razpored</h3>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 align-middle">
                                <thead>
                                <tr>
                                    <th>Dan</th>
                                    <th>Odprto</th>
                                    <th>Zaprto</th>
                                    <th>Ekipa</th>
                                    <th>Opomba</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr><td>Ponedeljek</td><td>08:00</td><td>17:00</td><td>Frontend</td><td>Redni termin</td></tr>
                                <tr><td>Torek</td><td>08:00</td><td>17:00</td><td>Backend</td><td>Redni termin</td></tr>
                                <tr><td>Sreda</td><td>08:00</td><td>17:00</td><td>Full-stack</td><td>Redni termin</td></tr>
                                <tr><td>Četrtek</td><td>08:00</td><td>17:00</td><td>Frontend</td><td>Sestanki</td></tr>
                                <tr><td>Petek</td><td>08:00</td><td>15:00</td><td>Support</td><td>Krajši urnik</td></tr>
                                <tr><td>Sobota</td><td>09:00</td><td>13:00</td><td>Support</td><td>Po dogovoru</td></tr>
                                <tr><td>Nedelja</td><td>-</td><td>-</td><td>-</td><td>Zaprto</td></tr>
                                <tr><td>Prazniki</td><td>-</td><td>-</td><td>-</td><td>Zaprto</td></tr>
                                <tr><td>Online podpora</td><td>07:00</td><td>20:00</td><td>Chat</td><td>Vsak dan</td></tr>
                                <tr class="last-row"><td class="last-row-left">Nujni primeri</td><td>00:00</td><td>24:00</td><td>Dezurna ekipa</td><td class="last-row-right">Telefonsko</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/footer.php'; ?>

<script src="lib/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
<script src="js/skripta.js"></script>
</body>
</html>
