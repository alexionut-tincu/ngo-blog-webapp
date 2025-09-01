<?php

$config = require __DIR__ . '/../../config.php';

$db_config = $config['database'];
$dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $db_config['user'], $db_config['pass'], $options);
} catch (\PDOException $e) {
    error_log('Database Connection Error: ' . $e->getMessage());
    die('An error occurred. Please try again later.');
}