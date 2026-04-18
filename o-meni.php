<?php
$currentPage = 'o-meni';
?>
<!doctype html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>O meni | Moja Spletna Stran</title>
    <link rel="stylesheet" href="lib/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stil.css">
</head>
<body>
<?php require __DIR__ . '/header.php'; ?>

<main class="site-main py-5">
    <section class="container">
        <h1 class="text-center display-5 mb-4">O meni</h1>
        <article class="card section-card p-4 mb-4">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center">
                    <img src="img/profil.svg" alt="Profilna slika" class="profile-photo img-fluid">
                </div>
                <div class="col-md-8">
                    <h2 class="h1 mb-1">Janez Novak</h2>
                    <p class="text-muted mb-4">Studentska stevilka: 63210001</p>
                    <p>Sem student racunalnistva in informatike, ki ga zanimajo sodobne spletne tehnologije in razvoj uporabnih digitalnih resitev.</p>
                    <p>Pri delu me vodi jasna komunikacija, dobra organizacija ter osredotocenost na kakovostno uporabnisko izkusnjo.</p>
                    <p>Najvec casa namenim razvoju spletnih aplikacij, kjer zdruzujem znanje iz HTML, CSS, JavaScript in PHP okolja.</p>
                    <p>V prostem casu rad spremljam novosti iz IT sveta, preizkusam nova orodja in utrjujem osnovne principe varnega kodiranja.</p>
                    <p>V prihodnosti zelim graditi projekte, ki bodo uporabnikom olajsali vsakodnevna opravila in izboljsali digitalno dostopnost.</p>
                </div>
            </div>
        </article>

        <div class="row g-4 mb-4">
            <div class="col-lg-6">
                <aside class="card table-card h-100">
                    <div class="card-header">Najljubse povezave</div>
                    <div class="card-body py-2">
                        <ul class="list-group list-group-flush link-list">
                            <li class="list-group-item"><a href="https://github.com" target="_blank" rel="noopener noreferrer">GitHub</a></li>
                            <li class="list-group-item"><a href="https://stackoverflow.com" target="_blank" rel="noopener noreferrer">Stack Overflow</a></li>
                            <li class="list-group-item"><a href="https://developer.mozilla.org" target="_blank" rel="noopener noreferrer">MDN Web Docs</a></li>
                            <li class="list-group-item"><a href="https://www.php.net" target="_blank" rel="noopener noreferrer">PHP.net</a></li>
                            <li class="list-group-item"><a href="https://getbootstrap.com" target="_blank" rel="noopener noreferrer">Bootstrap</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-6">
                <aside class="card table-card h-100">
                    <div class="card-header">Najljubsi filmi</div>
                    <div class="card-body py-2">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">Inception</li>
                            <li class="list-group-item">The Matrix</li>
                            <li class="list-group-item">Interstellar</li>
                            <li class="list-group-item">The Shawshank Redemption</li>
                            <li class="list-group-item">The Dark Knight</li>
                            <li class="list-group-item">Forrest Gump</li>
                        </ol>
                    </div>
                </aside>
            </div>
        </div>

        <article class="card table-card">
            <div class="card-header">Akademski podatki</div>
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead>
                    <tr>
                        <th>Predmet</th>
                        <th>Letnik</th>
                        <th>ECTS</th>
                        <th>Ocena</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr><td>Programiranje 1</td><td>1</td><td>8</td><td>9</td><td>Opravljeno</td></tr>
                    <tr><td>Spletne tehnologije</td><td>2</td><td>6</td><td>10</td><td>V teku</td></tr>
                    <tr><td>Podatkovne baze</td><td>2</td><td>7</td><td>8</td><td>Opravljeno</td></tr>
                    <tr><td>Algoritmi</td><td>2</td><td>8</td><td>9</td><td>Opravljeno</td></tr>
                    <tr><td>Racunalniske mreze</td><td>3</td><td>6</td><td>8</td><td>V teku</td></tr>
                    <tr><td>Umetna inteligenca</td><td>3</td><td>7</td><td>9</td><td>V teku</td></tr>
                    </tbody>
                </table>
            </div>
        </article>
    </section>
</main>

<?php require __DIR__ . '/footer.php'; ?>

<script src="lib/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
<script src="js/skripta.js"></script>
</body>
</html>
