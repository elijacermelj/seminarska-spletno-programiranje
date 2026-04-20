<?php
if (PHP_SAPI !== 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    header('Location: index.php');
    exit;
}

require_once __DIR__ . '/menu.php';
?>
<footer class="site-footer border-top mt-5">
    <div class="container py-4 d-flex justify-content-between align-items-center">
        <p class="text text-muted small mb-0">&copy; <?php echo date('Y'); ?> Moja Spletna Stran</p>
        <ul class="list-inline mb-0 text-end">
            <?php foreach ($menuItems as $item): ?>
                <li class="list-inline-item ms-3">
                    <a class="footer-link text-decoration-none" href="<?php echo htmlspecialchars($item['url'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</footer>
