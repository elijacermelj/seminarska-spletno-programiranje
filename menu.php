<?php
if (PHP_SAPI !== 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    header('Location: index.php');
    exit;
}

$menuItems = [
    [
        'key' => 'index',
        'label' => 'Domov',
        'url' => 'index.php',
    ],
    [
        'key' => 'o-meni',
        'label' => 'O meni',
        'url' => 'o-meni.php',
    ],
    [
        'key' => 'opravila',
        'label' => 'Opravila',
        'url' => 'opravila.php',
    ],
    [
        'key' => 'kontakt',
        'label' => 'Kontakt',
        'url' => 'kontakt.php',
    ],
];
