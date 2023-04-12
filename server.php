<?php

$newTodo = isset($_POST['newtodo']) ? $_POST['newtodo'] : NULL;

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

if($newTodo !== '') {
    $todo_list[] = [
        'text' => $newTodo,
        'done' => 'false'
    ];
}

header('Content-Type: application/json');

echo json_encode($todo_list);
