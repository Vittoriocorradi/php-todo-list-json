<?php

$todo_list = [
    [
        'text' => 'Html',
        'done' => 'true'
    ],
    [
        'text' => 'Css',
        'done' => 'true'
    ],
    [
        'text' => 'Responsive design',
        'done' => 'false'
    ]
];

header('Content-Type: application/json');

echo json_encode($todo_list);
