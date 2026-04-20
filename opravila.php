<?php
$currentPage = 'opravila';
?>
<!doctype html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opravila | Moja Spletna Stran</title>
    <link rel="stylesheet" href="lib/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stil.css">
</head>
<body>
<?php require __DIR__ . '/header.php'; ?>

<main class="site-main py-5">
    <section class="container">
        <h1 class="text-center display-5 mb-4">Moja opravila</h1>
        <article class="card todo-card mb-4">
            <div class="card-header d-flex flex-wrap gap-3 justify-content-between align-items-center">
                <h2 class="h3 mb-0">To-do aplikacija</h2>
                <button type="button" class="btn btn-light btn-lg" id="addTaskButton">Dodaj nalogo</button>
            </div>
            <div class="card-body p-0">
                <form id="taskForm" class="p-3 border-bottom" action="#" method="post">
                    <label for="taskInput" class="form-label fw-semibold">Nova naloga</label>
                    <input id="taskInput" name="taskInput" type="text" class="form-control" placeholder="Vnesi opis naloge" autocomplete="off">
                </form>
                <ul class="list-group list-group-flush" id="taskList">
                    <li class="list-group-item task-item" data-completed="false">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input task-check mt-0" type="checkbox" aria-label="Oznaci nalogo kot dokoncano">
                            <span class="task-text flex-grow-1">Dokoncaj projekt za spletne tehnologije</span>
                            <button type="button" class="btn btn-outline-danger btn-sm task-delete">Izbriši</button>
                        </div>
                    </li>
                    <li class="list-group-item task-item task-completed" data-completed="true">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input task-check mt-0" type="checkbox" checked aria-label="Oznaci nalogo kot dokoncano">
                            <span class="task-text flex-grow-1">Pripravi se na izpit iz algoritmov</span>
                            <button type="button" class="btn btn-outline-danger btn-sm task-delete">Izbriši</button>
                        </div>
                    </li>
                    <li class="list-group-item task-item" data-completed="false">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input task-check mt-0" type="checkbox" aria-label="Oznaci nalogo kot dokoncano">
                            <span class="task-text flex-grow-1">Preberi dokumentacijo za React</span>
                            <button type="button" class="btn btn-outline-danger btn-sm task-delete">Izbriši</button>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer bg-white">
                <div class="row g-3 text-center">
                    <div class="col-6 stats-box border-end">
                        <p class="count-number text-primary mb-1" id="activeCount">0</p>
                        <p class="mb-0 text-muted">Aktivnih</p>
                    </div>
                    <div class="col-6 stats-box">
                        <p class="count-number text-success mb-1" id="completedCount">0</p>
                        <p class="mb-0 text-muted">Dokončanih</p>
                    </div>
                </div>
            </div>
        </article>

        <aside class="alert alert-info mb-0" role="note">
            <h2 class="h4 mb-3">Navodila za uporabo</h2>
            <ul class="mb-0">
                <li>Klikni gumb "Dodaj nalogo" za dodajanje nove naloge iz vnosnega polja.</li>
                <li>Označi potrditveno polje za označevanje naloge kot dokončane.</li>
                <li>Pri odznačitvi dokončane naloge te aplikacija opozori, da bo naloga ponovno aktivna.</li>
                <li>Uporabi gumb "Izbriši" za odstranitev naloge s seznama.</li>
            </ul>
        </aside>
    </section>
</main>

<?php require __DIR__ . '/footer.php'; ?>

<script src="lib/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
<script src="js/skripta.js"></script>
</body>
</html>
