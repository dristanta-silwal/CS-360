<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$storedPassword = $_ENV['EXTRA_FEATURES_PASSWORD'];

session_start();
$data = json_decode(file_get_contents('php://input'), true);

if ($data['password'] === $storedPassword) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}
?>
