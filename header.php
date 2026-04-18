<?php
require_once __DIR__ . '/menu.php';

$currentPage = $currentPage ?? '';
?>
<header class="site-header">
    <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.php">Moja Spletna Stran</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Preklopi navigacijo">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php foreach ($menuItems as $item): ?>
                        <?php $isActive = $item['key'] === $currentPage; ?>
                        <li class="nav-item">
                            <a
                                class="nav-link<?php echo $isActive ? ' active fw-semibold text-primary' : ''; ?>"
                                <?php echo $isActive ? 'aria-current="page"' : ''; ?>
                                href="<?php echo htmlspecialchars($item['url'], ENT_QUOTES, 'UTF-8'); ?>"
                            >
                                <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
