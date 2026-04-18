<?php
$currentPage = 'kontakt';

$values = [
    'full_name' => '',
    'email' => '',
    'phone' => '',
    'message' => '',
];

$errors = [];
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($values as $field => $defaultValue) {
        $values[$field] = trim($_POST[$field] ?? '');
    }

    if ($values['full_name'] === '') {
        $errors[] = 'Polje ime in priimek je obvezno.';
    } elseif (!preg_match('/^[A-Za-z ]+$/', $values['full_name'])) {
        $errors[] = 'Ime in priimek lahko vsebujeta samo crke od a do z in presledke.';
    }

    if ($values['email'] === '') {
        $errors[] = 'Polje e-mail je obvezno.';
    } elseif (!filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'E-mail naslov ni v pravilni obliki.';
    }

    if ($values['phone'] === '') {
        $errors[] = 'Polje telefon je obvezno.';
    } elseif (!preg_match('/^[0-9]+$/', $values['phone'])) {
        $errors[] = 'Telefon lahko vsebuje samo stevilke.';
    }

    if ($values['message'] === '') {
        $errors[] = 'Polje sporocilo je obvezno.';
    }

    if (empty($errors)) {
        $successMessage = 'Vaše povpraševanje je uspešno poslano.';
        foreach ($values as $field => $defaultValue) {
            $values[$field] = '';
        }
    }
}
?>
<!doctype html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt | Moja Spletna Stran</title>
    <link rel="stylesheet" href="lib/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stil.css">
</head>
<body>
<?php require __DIR__ . '/header.php'; ?>

<main class="site-main py-5">
    <section class="container contact-wrapper">
        <h1 class="text-center display-4 mb-3">Stopite v stik</h1>
        <p class="text-center text-secondary mb-4">Imate vprasanje ali predlog? Z veseljem pomagamo.</p>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger" role="alert">
                <h2 class="h5">Obrazec vsebuje napake:</h2>
                <ul class="mb-0">
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($successMessage !== ''): ?>
            <div class="alert alert-success" role="alert">
                <?php echo htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>

        <article class="card contact-card mb-4">
            <div class="card-header">Kontaktni obrazec</div>
            <div class="card-body">
                <form method="post" action="kontakt.php">
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="full_name">Ime in priimek *</label>
                        <input
                            id="full_name"
                            name="full_name"
                            type="text"
                            class="form-control"
                            value="<?php echo htmlspecialchars($values['full_name'], ENT_QUOTES, 'UTF-8'); ?>"
                            placeholder="Janez Novak"
                            pattern="[A-Za-z ]+"
                            required
                        >
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="email">E-mail naslov *</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            class="form-control"
                            value="<?php echo htmlspecialchars($values['email'], ENT_QUOTES, 'UTF-8'); ?>"
                            placeholder="janez.novak@email.si"
                            required
                        >
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="phone">Telefon *</label>
                        <input
                            id="phone"
                            name="phone"
                            type="text"
                            class="form-control"
                            value="<?php echo htmlspecialchars($values['phone'], ENT_QUOTES, 'UTF-8'); ?>"
                            placeholder="031123456"
                            inputmode="numeric"
                            pattern="[0-9]+"
                            required
                        >
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="message">Sporocilo *</label>
                        <textarea
                            id="message"
                            name="message"
                            class="form-control"
                            rows="5"
                            placeholder="Vase sporocilo..."
                            required><?php echo htmlspecialchars($values['message'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 btn-lg">Poslji sporocilo</button>
                    <p class="small text-muted mt-3 mb-0">* Vsa polja so obvezna.</p>
                </form>
            </div>
        </article>

        <section class="row g-3">
            <div class="col-md-4">
                <article class="contact-info-card h-100">
                    <p class="icon-pill">@</p>
                    <h2 class="h4">E-posta</h2>
                    <p class="mb-0">info@mojastran.si</p>
                </article>
            </div>
            <div class="col-md-4">
                <article class="contact-info-card h-100">
                    <p class="icon-pill">T</p>
                    <h2 class="h4">Telefon</h2>
                    <p class="mb-0">+386 1 234 5678</p>
                </article>
            </div>
            <div class="col-md-4">
                <article class="contact-info-card h-100">
                    <p class="icon-pill">N</p>
                    <h2 class="h4">Naslov</h2>
                    <p class="mb-0">Ljubljana, Slovenija</p>
                </article>
            </div>
        </section>
    </section>
</main>

<?php require __DIR__ . '/footer.php'; ?>

<script src="lib/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
<script src="js/skripta.js"></script>
</body>
</html>
