<?php
session_start();

function fetchCalendarData($showDetails) {
    $events = [
        [
            'title' => $showDetails ? 'Meeting with Team' : 'Busy',
            'start' => '2024-12-10T10:00:00',
            'end' => '2024-12-10T11:00:00',
        ],
        [
            'title' => $showDetails ? 'Project Presentation' : 'Busy',
            'start' => '2024-12-11T14:00:00',
            'end' => '2024-12-11T15:00:00',
        ],
    ];

    return $events;
}

$showDetails = isset($_SESSION['show_details']) && $_SESSION['show_details'];
header('Content-Type: application/json');
echo json_encode(fetchCalendarData($showDetails));
?>
