<?php

$todo_list = [
    [
        'text' => 'html',
        'done' => 'true'
    ],
    [
        'text' => 'css',
        'done' => 'true'
    ],
    [
        'text' => 'Responsive design',
        'done' => 'false'
    ]
];

header('Content-Type: application/json');

echo json_encode($todo_list);
