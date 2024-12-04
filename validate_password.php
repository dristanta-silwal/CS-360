<?php
session_start();

define('EXTRA_FEATURES_PASSWORD', 'qwerty');

$data = json_decode(file_get_contents('php://input'), true);

if ($data['password'] === EXTRA_FEATURES_PASSWORD) {
    $_SESSION['show_details'] = true;
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}
?>
