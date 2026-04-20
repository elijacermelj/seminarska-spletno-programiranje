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
                <div class="col-md-8">
                    <h2 class="h1 mb-1">Elija Čermelj</h2>
                    <p class="text-muted mb-4">Študentska številka: 35250059</p>
                    <p>Sem študent računalništva in informatike, ki ga zanimajo sodobne spletne tehnologije in razvoj uporabnih digitalnih rešitev.</p>
                    <p>Pri delu me vodi jasna komunikacija, dobra organizacija ter osredotočenost na kakovostno uporabniško izkušnjo.</p>
                    <p>Največ časa namenim razvoju spletnih aplikacij, kjer združujem znanje iz HTML, CSS, JavaScript in PHP okolja.</p>
                    <p>V prostem času rad spremljam novosti iz IT sveta, preizkušam nova orodja in utrjujem osnovne principe varnega kodiranja.</p>
                    <p>V prihodnosti želim graditi projekte, ki bodo uporabnikom olajšali vsakodnevna opravila in izboljšali digitalno dostopnost.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/profil.jpg" alt="Programer dela za računalnikom, pogled od zadaj" class="profile-photo img-fluid">
                </div>
            </div>
        </article>

        <div class="row g-4 mb-4">
            <div class="col-lg-6">
                <aside class="card table-card h-100">
                    <div class="card-header">Najljubše povezave</div>
                    <div class="card-body py-2">
                        <ul class="list-group list-group-flush link-list">
                            <li class="list-group-item"><a href="https://youtube.com" target="_blank" rel="noopener noreferrer">YouTube</a></li>
                            <li class="list-group-item"><a href="https://mobbin.com" target="_blank" rel="noopener noreferrer">Mobbin</a></li>
                            <li class="list-group-item"><a href="https://github.com" target="_blank" rel="noopener noreferrer">GitHub</a></li>
                            <li class="list-group-item"><a href="https://www.w3schools.com" target="_blank" rel="noopener noreferrer">W3Schools</a></li>
                            <li class="list-group-item"><a href="https://figma.com" target="_blank" rel="noopener noreferrer">Figma</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-6">
                <aside class="card table-card h-100">
                    <div class="card-header">Najljubši filmi</div>
                    <div class="card-body py-2">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">Spider Man</li>
                            <li class="list-group-item">2 Fast 2 Furious</li>
                            <li class="list-group-item">Fast Five</li>
                            <li class="list-group-item">Rocky 4</li>
                            <li class="list-group-item">War Dogs</li>
                        </ol>
                    </div>
                </aside>
            </div>
        </div>

        <article class="card table-card">
            <h2 class="card-header h5 mb-0">Šolski podatki</h2>
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
                    <tr><td>Programiranje 1</td><td>1</td><td>6</td><td>8</td><td>Opravljeno</td></tr>
                    <tr><td>Statistika 1</td><td>1</td><td>6</td><td>9</td><td>Opravljeno</td></tr>
                    <tr><td>Uvod v informatiko</td><td>1</td><td>6</td><td>6</td><td>Opravljeno</td></tr>
                    <tr><td>Matematika 1</td><td>1</td><td>6</td><td>6</td><td>Opravljeno</td></tr>
                    <tr class="last-row"><td class="last-row-left">Algoritmi</td><td>1</td><td>0</td><td>5</td><td class="last-row-right">V teku</td></tr>
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
