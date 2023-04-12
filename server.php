<?php

$newTodo = isset($_POST['newtodo']) ? $_POST['newtodo'] : NULL;

$todo_list = file_get_contents(__DIR__.'/todo-list.json');

$todo_list = json_decode($todo_list, true);

if ($newTodo !== NULL) {
    $todo_list[] = [
                'text' => $newTodo,
                'done' => false
            ];
}

$todo_list = json_encode($todo_list);

file_put_contents(__DIR__.'/todo-list.json', $todo_list);

header('Content-Type: application/json');

echo $todo_list;
