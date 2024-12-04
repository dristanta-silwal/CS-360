<?php
session_start();

function fetchCalendarData($showDetails)
{
    $events = [
        [
            'title' => $showDetails ? 'Stat 301' : 'Class',
            'start' => '2024-12-04T12:30:00',
            'end' => '2024-12-04T13:20:00',
            'daysOfWeek' => [1, 3, 5], // Monday, Wednesday, Friday
            'startTime' => '12:30:00',
            'endTime' => '13:20:00'
        ],

        [
            'title' => $showDetails ? 'CS 210' : 'Class',
            'start' => '2024-12-05T12:30:00',
            'end' => '2024-12-05T13:45:00',
            'daysOfWeek' => [2, 4], // Tuesday, Thursday
            'startTime' => '12:30:00',
            'endTime' => '13:45:00'
        ],

        [
            'title' => $showDetails ? 'CS 360' : 'Class',
            'start' => '2024-12-05T14:00:00',
            'end' => '2024-12-05T15:15:00',
            'daysOfWeek' => [2, 4], // Tuesday, Thursday
            'startTime' => '14:00:00',
            'endTime' => '15:15:00'
        ],
        [
            'title' => $showDetails ? 'CS 360: Lab' : 'Lab',
            'start' => '2024-12-05T14:00:00',
            'end' => '2024-12-05T15:15:00',
            'daysOfWeek' => [3], // Wednesday
            'startTime' => '9:30:00',
            'endTime' => '10:15:00'
        ],

        [
            'title' => $showDetails ? 'Guest Services' : 'Work',
            'start' => '2024-12-09T14:00:00',
            'end' => '2024-12-09T17:00:00',
            'daysOfWeek' => [1], // Monday
            'startTime' => '14:00:00',
            'endTime' => '17:00:00'
        ],
        [
            'title' => $showDetails ? 'Guest Services' : 'Work',
            'start' => '2024-12-09T14:00:00',
            'end' => '2024-12-09T17:00:00',
            'daysOfWeek' => [2], // Tuesday
            'startTime' => '15:30:00',
            'endTime' => '18:00:00'
        ],
        [
            'title' => $showDetails ? 'Guest Services' : 'Work',
            'start' => '2024-12-09T14:00:00',
            'end' => '2024-12-09T17:00:00',
            'daysOfWeek' => [3], // Wednesday
            'startTime' => '16:00:00',
            'endTime' => '18:00:00'
        ],
        [
            'title' => $showDetails ? 'OIT TSP' : 'Work',
            'start' => '2024-12-09T14:00:00',
            'end' => '2024-12-09T17:00:00',
            'daysOfWeek' => [1, 4, 5], // Monday, Thursday, Friday
            'startTime' => '8:00:00',
            'endTime' => '12:00:00'
        ],
    ];

    return $events;
}

$showDetails = isset($_SESSION['show_details']) && $_SESSION['show_details'];
header('Content-Type: application/json');
echo json_encode(fetchCalendarData($showDetails));
?>