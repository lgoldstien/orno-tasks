<?php

return [
    '/api/task' => [
        'get' => 'App\Controller\Task::getAll',
        'post' => 'App\Controller\Task::create',
        'put' => 'App\Controller\Task::create',
        'delete' => 'App\Controller\Task::noMethod'
    ],
    '/api/task/(id)' => [
        'get' => 'App\Controller\Task::get',
        'post' => 'App\Controller\Task::update',
        'put' => 'App\Controller\Task::update',
        'delete' => 'App\Controller\Task::delete'
    ]
];
